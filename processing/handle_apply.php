<?php
    include 'db.php';
    if(isset($_POST['phone'])) {
        // Sanitize the input to prevent SQL injection
        $phone = $conn->real_escape_string($_POST['phone']);
    
        // Prepare SQL statement to select data based on phone number
        $sql = "SELECT * FROM borrowers WHERE contact_no = '$phone'";
    
        // Execute the query
        $result = $conn->query($sql);
        // Check if any rows are returned
        if ($result->num_rows>0) {
            $phone = $_POST["phone"];
            $sql = "SELECT borrowers.*, loan_list.* 
            FROM loan_list 
            INNER JOIN borrowers ON loan_list.borrower_id = borrowers.id 
            WHERE borrowers.contact_no = '$phone'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    // Access data from the row
                    // For example:
                    print_r($row);
                   
                    // Print or process the data as needed
                }
            } else {
                header("Location: ../loan.php#register");
            }

        } else {
            // Redirect to the register page
            header("Location: ../register.html#register");
            exit(); // Ensure script stops execution after redirection
        }
    } else {
        // If phone number is not provided, redirect to an error page or handle it accordingly
        echo "Phone number not provided.";
    }
    
    // Close connection
    $conn->close();
?>