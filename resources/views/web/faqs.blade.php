<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Initially hide all answers
      $('.answer').hide();

      // Add a click event to the 'toggle' class to toggle the answer
      $('.toggle').click(function() {
        // Find the associated answer element using next()
        var answer = $(this).next('.answer');
        // Toggle the answer's visibility
        answer.slideToggle();
      });
    });
  </script>
    
    <style type="text/css">

  
      .faq h4:hover{
        color: #d1a700;
        cursor: pointer;
      }
  
  
      </style>

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

  
  

 
</head>

<body>

  <!-- ======= Header ======= -->
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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/assets/img/faqs-banner.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>FAQs</h2>
        <ol>
          <li><a href="{{route('index');}}">Home</a></li>
          <li>FAQs</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->



    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="services-list">
              <a href="#" class="toggle"><h4 >Day Tour</h4></a>
                 <p class="answer"><strong>INCLUSION: </strong> 8am - 5pm, Entrance, Common CR. </p>
                    
              <a href="#" class="toggle"><h4>Resort House Rules</h4></a>
                <p class="answer">Camp in time: 2:00 PM <br>
                  Break Camp: 12 NN <br>
                  Weekdays: Monday to Thursday <br>
                  Weekends: Friday to Sunday <br>
                  All prices are subject to change without prior notice.</p>
              <a href="#"><h4>Payment And Reservation</h4></a>
              <a href="{{route('contacts');}}"><h4>Location Inquiries</h4></a>
            </div>

            <h4>Cancelation Policies & Reservation</h4>
            <p>Once you've booked a reservation with your desired dates, 
              This will be considered final.<br>
               Any changes after this will be subject to<br> additional fees.</p>

              <p>*Booking Cancellation before15 days prior to booking date will be charged 30% 
                of your<br> total deposit.</p>
              <p>*A Non refundable deposit if you will cancel/<br>rebook below 15days
               prior to your booking date . </p>
              
              <p>NOTE:
              Refunds may take 1-2 weeks processing <br>and bank transfer fee will be charged.</p>
          </div>




          <div class="col-lg-8">
            <!--FAQ's-->

            <div class="faq">
              <h3>Question 1</h3>
              <h4 class="toggle">Q. What are the things that can be brought in the resort?</h4>
              <p class="answer">- Essential items they need to bring are their OWN TUMBLER, FLASHLIGHT & MOSQUITO REPELLANT.</p>
            </div><br><br>
            
            


            <div class ="faq">
            <h3>Question 2</h3>
            <h4 class="toggle">Q. What are the things that cannot be brought in the resort?</h4>


            <p class="answer">-Haven Campsite Beach resort encourages their customers not to bring any valuable
               things such as jewelry, expensive watches, stuff and etc that are not necessarily 
               for camping & swimming to avoid losses.</p><br>
              </div><br><br>


            <div class ="faq">
              <h3>Question 3</h3>
              <h4 class="toggle">Q. Are there any entrance fees at the resort?</h4>
              <p class="answer">-San Felipe Municipal issued a fee for 50pesos per head for coastal conservation as you enter the area.</p><br>
            </div><br><br>

            <div class ="faq">
              <h3>Question 4</h3>
              <h4 class="toggle">Q. Do they have a policy about loud sounds?</h4>

              <p class="answer">-Strictly observe silence & NO LOUD MUSIC & CHITCHAT between 10pm to 7am.</p><br>
            </div><br><br>

            <div class ="faq">
              <h3>Question 5</h3>
              <h4 class="toggle">Q. Do they have a policy about smoking?</h4>

              <p class="answer">-Strictly no smoking and vaping</p><br>
            </div><br><br>


            <div class ="faq">
              <h3>Question 6</h3>
              <h4 class="toggle">Q. Are there any corkage fees applied when bringing outside foods and drinks?</h4>

              <p class="answer">-For Room Accommodation - P1,000(per accommodation)
                  Camping - P100 per head, NO corkage fee for water & chips.</p><br>
            </div><br><br>


            <div class ="faq">
              <h3>Question 7</h3>
              <h4 class="toggle">Q. Can the customers cook in the area?</h4>

              <p class="answer">-Yes, But they don't have a common kitchen. They encourage the customers to bring their own
                  cookwares if ever they want to cook in the area.</p><br>
           </div><br><br>


           <div class ="faq">
             <h3>Question 8</h3>
             <h4 class="toggle">Q. If the customer already booked, will the customer still cancel the booking?</h4>

             <p class="answer">-Booking Cancellation before15 days prior to booking date will be charged 30% of 
                 your total deposit. A Non refundable deposit if you will cancel/rebook below 15 days 
                prior to your booking date. NOTE: Refunds may take 1-2 weeks processing and bank transfer 
                fee will be charged.</p><br>
            </div><br><br>


            <div class ="faq">
              <h3>Question 9</h3>
              <h4 class="toggle">Q. What are other accommodations for customers?</h4>

              <p class="answer">- They have Parking Space, Korean-Filipino Resto, Alon Bar.</p><br>
            </div><br><br>


          </div>

        </div>

      </div>
    </section><!-- End Service Details Section -->

    

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