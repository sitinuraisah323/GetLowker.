

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Get LowKer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/presento/assets/img/favicon.png" rel="icon">
  <link href="/presento/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/presento/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/presento/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/presento/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/presento/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/presento/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/presento/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/presento/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/presento/assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Presento - v3.3.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<!-- ======= Header ======= -->
   <header id="header" class="fixed-top d-flex align-items-center">
     <div class="container d-flex align-items-center">
       <h1 class="logo me-auto">GetLowKer<span>.</span></a></h1>
       <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a href="index.html" class="logo me-auto"><img src="presento/assets/img/logo.png" alt=""></a>-->
 
       <nav id="navbar" class="navbar order-last order-lg-0">
         <ul>
           <li><a class="nav-link scrollto active" href="#hero"></a></li>
           <li><a class="nav-link scrollto" href="/user">Beranda</a></li>
           <li><a class="nav-link scrollto" href="/profil ">Profil</a></li>
           <li><a class="nav-link scrollto" href="/cariLowker">Cari LowKer</a></li>
           <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
         </ul>
         <i class="bi bi-list mobile-nav-toggle"></i>
       </nav><!-- .navbar -->

 <?php 


 if ($auth == NULL){ ?>
   <a href="log" class="get-started-btn scrollto">Login</a>
 <?php }else{ ?>
       <a href="/logout" class="get-started-btn scrollto">Logout</a>
<?php } ?>
       
     </div>
   </header><!-- End Header -->

 @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Presento<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/presento/assets/vendor/aos/aos.js"></script>
  <script src="/presento/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/presento/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/presento/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/presento/assets/vendor/php-email-form/validate.js"></script>
  <script src="/presento/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/presento/assets/vendor/swiper/swiper-bundle.min.js"></script>
  

  <!-- Template Main JS File -->
  <script src="/presento/assets/js/main.js"></script>

</body>

</html>