<?php
    include "db.php";

    $sql = "INSERT INTO borrowers (photo, firstname, lastname, contact_no, address, email, aadhaar, pan, payslip, front_id, back_id, kra_doc, date_created) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $photo, $firstname, $lastname, $contact_no, $address, $email, $aadhaar, $pan, $payslip, $front_id, $back_id, $kra_doc);
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $contact_no = $conn->real_escape_string($_POST['contact_no']);
    $address = $conn->real_escape_string($_POST['location']);
    $email = $conn->real_escape_string($_POST['email']);
    $aadhaar = $conn->real_escape_string($_POST['kra']);
    $pan = $conn->real_escape_string($_POST['id_number']);

    // $uploaded_files = $_FILES;
    $path = "documents/" . $aadhaar . "/";
    if (!file_exists($path)) {
        if (!mkdir($path, 0777, true)) {
            die("Failed to create directory: $path");
        }
    } 
    // print_r($_FILES);
    $front_id = $conn->real_escape_string($_FILES['front_id']['name']);
    $front_tmp = $_FILES['front_id']['tmp_name'];
    $back_id = $conn->real_escape_string($_FILES['back_id']['name']);
    $back_tmp = $_FILES['back_id']['tmp_name'];
    $kra_doc = $conn->real_escape_string($_FILES['kra_file']['name']);
    $kra_tmp = $_FILES['kra_file']['tmp_name'];
    $photo = $conn->real_escape_string($_FILES['profile']['name']);
    $photo_tmp = $_FILES['profile']['tmp_name'];    
    $message_success = "File has been uploaded successfully.";
    $message_failure = "Failed to move file.";

    if (move_uploaded_file($front_tmp, $path . $front_id)) {
        $result_message =  $message_success;
    } else {
        $result_message =  $message_failure;
    }
    if (move_uploaded_file($back_tmp, $path . $back_id)) {
        $result_message =  $message_success;
    } else {
        $result_message =  $message_failure;
    }
    if (move_uploaded_file($kra_tmp, $path . $kra_doc)) {
        $result_message =  $message_success;
    } else {
        $result_message =  $message_failure;
    }
    if (move_uploaded_file($photo_tmp, $path . $photo)) {
        $result_message =  $message_success;
    } else {
        $result_message =  $message_failure;
    }


    // // Assign post data to variables
    // $photo = $_POST['photo'];
    // $firstname = $_POST['firstname'];
    // $lastname = $_POST['lastname'];
    // $contact_no = $_POST['contact_no'];
    // $address = $_POST['address'];
    // $email = $_POST['email'];
    // $aadhaar = $_POST['kra'];
    // $pan = $_POST['id'];
    // $payslip = $_POST['payslip'];

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../apply.php?number=$contact_no");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();

?>