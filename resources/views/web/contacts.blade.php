<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Haven Campsite Resort</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset("web/assets/img/favicon.png")}}" rel="icon">
  <link href="{{asset("web/assets/img/apple-touch-icon.png")}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset("web/assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("web/assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("web/assets/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet">
  <link href="{{asset("web/assets/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{asset("web/assets/vendor/glightbox/css/glightbox.min.css")}}" rel="stylesheet">
  <link href="{{asset("web/assets/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset("web/assets/css/main.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- Navigation Bar -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    
          <a href="{{route('index');}}" class="logo d-flex align-items-center">
            <h1>Haven Campsite Liwliwa<span>.</span></h1>
          </a>
    
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a href="{{route('index');}}">Home</a></li>
              <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('accommodations');}}">Accommodations</a></li>
                  <li><a href="{{route('events');}}">Events</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="active"><span>Contact Us</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="{{route('contacts');}}">Contact and Location</a></li>
                  <li><a href="{{route('faqs');}}">FAQs</a></li>
                </ul>
              </li>
              <li><a href="{{route('booknow');}}">Book Now</a></li>
            </ul>
          </nav>
        </div>
    </header>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/assets/img/contact/contact-banner.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="{{route('index');}}">Home</a></li>
          <li>Contact and Location</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
    
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>Sitio Liwliwa, Brgy Sto. Nino, San Felipe, 2200 Zambales</p>
            </div>
          </div><!-- End Info Item -->
    
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p><a href="mailto:beachhavencampsite@gmail.com">beachhavencampsite@gmail.com</a></p>
            </div>
          </div><!-- End Info Item -->
    
          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p><a href="tel:09177069136">0917 706 9136</a></p>
            </div>
          </div><!-- End Info Item -->
    
        </div>
    
        <div class="row gy-4 mt-1">
    
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3852.945325827887!2d120.05642507495831!3d15.051140085490418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3395d3ccde03d279%3A0xe985d234e85edb1!2sHaven%20Campsite%20Liwliwa!5e0!3m2!1sen!2sph!4v1696933412469!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div><!-- End Google Maps -->
    
        </div>
    
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-content position-relative">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3>Haven Campsite Resort.</h3>
            <p>
              Sitio Liwliwa, San Felipe <br>
              Zambales, Philippines<br><br>
              <strong>Phone:</strong><a href="tel:09177069136"> 0917 706 9136</a><br>
              <strong>Email:</strong><a href="mailto:beachhavencampsite@gmail.com"> beachhavencampsite@gmail.com</a><br>
            </p>
            <div class="social-links d-flex mt-3">
                <a href="https://www.facebook.com/havencampsiteliwliwa/" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/havencampsiteliwliwa/?hl=en" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              </div>
          </div>
        </div><!-- End footer info column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Navigation</h4>
          <ul>
              <li><a href="{{route('index');}}">Home</a></li>
              <li><a href="{{route('contacts');}}">Contact Us</a></li>
              <li><a href="{{route('faqs');}}">FAQs</a></li>
              <li><a href="{{route('booknow');}}">Book Now</a></li>
          </ul>
        </div><!-- End footer links column-->

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="{{route('accommodations');}}">Accomodations</a></li>
            <li><a href="{{route('events');}}">Events</a></li>
          </ul>
        </div><!-- End footer links column-->
      </div>
    </div>
  </div>

  <div class="footer-legal text-center position-relative">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Haven Campsite Beach Resort</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
        Designed by <a href="#">ange-LATE-o</a>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="web/assets/vendor/aos/aos.js"></script>
<script src="web/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="web/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="web/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="web/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="web/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="web/assets/js/main.js"></script>

</body>

</html>