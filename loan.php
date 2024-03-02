<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ERIBA Ventures</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ERIBA Ventures
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/ERIBA Ventures-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">ERIBA Ventures<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="admin">Login</a></li>
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>ERIBA Ventures</span></h1>
      <h2></h2>
      <div class="d-flex">
        <a href="#register" class="btn-get-started scrollto">Click to Register</a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="register">

    



    <!-- ======= Contact Section ======= -->
    <section id="" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3 col-md-6">
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          

          <div class="col-lg-6 register" id="">
            <form action="processing/handle_register.php" enctype="multipart/form-data" method="post" role="form" class="php-email-form">
              <div class="row form-group">
                <div class="col form-group">
                  <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name" required>
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
                </div>
              </div>

              <div class="row">
                <div class="col form-group">
                  <input type="number" name="id_number" class="form-control" id="id_number" placeholder="ID Number" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="contact_no" class="form-control" id="contact_no" placeholder="Contact Number" required>
                </div>
                <div class="col form-group">
                  <input type="text" class="form-control" name="kra" id="kra" placeholder="KRA PIN" required>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="location" rows="3" placeholder="Enter Physical Location" required></textarea>
              </div>
              <div class="row">
                <div class="col form-group">
                  <label for="front_id">Upload front ID Copy</label>
                  <input type="file" class="form-control" name="front_id" id="front_id" placeholder="Upload ID Copy" required>
                </div>
                <div class="col form-group">
                  <label for="back_id">Upload back ID Copy</label>
                  <input type="file" class="form-control" name="back_id" id="back_id" placeholder="Upload ID Copy" required>
                </div>
                <div class="col form-group">
                  <label for="kra_file">Upload KRA PIN Copy</label>
                  <input type="file" class="form-control" name="kra_file" id="kra_file" placeholder="Upload KRA File" required>
                </div>
              </div>
              <div class="form-group">
                <label for="profile">Upload Profile Picture</label>
                <input type="file" class="form-control" name="profile" id="profile" placeholder="Upload Profile Picture" required>
              </div>
              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Register</button></div>
            </form>
          </div>
          <div class="col-lg-6" style="background-image: url('./assets/img/1.webp');">
            
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>ERIBA Ventures</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ERIBA Ventures-bootstrap-business-template/ -->
        Designed by <a href="#">SoNuxTechnologies</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    var registerLink = document.querySelector('.btn-get-started.scrollto');
    registerLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        var registerElement = document.querySelector('.register');
        registerElement.scrollIntoView({ behavior: 'smooth' });
    });
});
  </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>