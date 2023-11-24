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
          <li class="dropdown"><a href="#" class="active"><span>Services</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('accommodations');}}">Accommodations</a></li>
              <li><a href="{{route('events');}}">Events</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Contact Us</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/assets/img/events/event-banner.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Events</h2>
        <ol>
          <li><a href="{{route('index');}}">Home</a></li>
          <li>Events
          </li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-celebrations">Celebrations</li>
            <li data-filter=".filter-social">Social Gatherings</li>
            <li data-filter=".filter-entertainment">Entertainment</li>
            <li data-filter=".filter-team-building">Team Building</li>
          </ul><!-- End Events Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-celebrations">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/celebration-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Weddings</h4>
                  <p>Celebrate your love with a breathtaking beachfront wedding at our serene resort, where the sun, sand, and sea 
                    create the perfect backdrop for your special day.</p>
                  <a href="{{asset("web/assets/img/events/celebration-1.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-team-building">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/team-building-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Team Building</h4>
                  <p>Experience team building like never before at our beach resort, where your team can bond, collaborate, and unwind 
                    in a stunning coastal paradise.</p>
                  <a href="{{asset("web/assets/img/events/team-building-1.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-celebrations">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/celebration-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Anniversary</h4>
                  <p>Celebrating love and togetherness with a blissful oceanfront escape at our enchanting beach resort.</p>
                  <a href="{{asset("web/assets/img/events/celebration-3.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-social">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/gatherings-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Reunion</h4>
                  <p>Experience a memorable beachfront reunion at our exquisite resort, filled with laughter, sun-kissed moments, 
                    and cherished memories with loved ones.</p>
                  <a href="{{asset("web/assets/img/events/gatherings-1.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-celebrations">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/celebration-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Birthdays</h4>
                  <p>Celebrate your special day with sand between your toes, a gentle sea breeze, and the laughter of friends and 
                    family at our beachfront paradise.</p>
                  <a href="{{asset("web/assets/img/events/celebration-2.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-entertainment">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/entertainment-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Acoustic Night</h4>
                  <p>Strings serenading the waves, making memories that melody engraves</p>
                  <a href="{{asset("web/assets/img/events/entertainment-1.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-celebrations">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/celebration-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Engagement</h4>
                  <p>Amidst the gentle lapping of waves and the golden hues of a setting sun, love found its perfect canvas at our 
                    beachfront oasis. </p>
                  <a href="{{asset("web/assets/img/events/celebration-4.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-social">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/gatherings-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Holiday Festivities</h4>
                  <p>Immerse yourself in the magic of the holidays as the sun kisses the sea, creating an enchanting backdrop for 
                    festive cheer.</p>
                  <a href="{{asset("web/assets/img/events/gatherings-2.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-celebrations">
              <div class="portfolio-content h-100">
                <img src="web/assets/img/events/celebration-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Kids Party</h4>
                  <p>At our beach resort, we create unforgettable moments for your little ones with our vibrant and fun-filled kids' 
                    parties.</p>
                  <a href="{{asset("web/assets/img/events/celebration-5.jpg")}}" class="glightbox preview-link"></i></a>
                </div>
              </div>
            </div><!-- End Events Item -->
          </div><!-- End Events Container -->
        </div>
      </div>
    </section><!-- End Our Events Section -->
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