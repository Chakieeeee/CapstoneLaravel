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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/asset/img/accomodations/acc-banner.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Accommodations</h2>
        <ol>
          <li><a href="{{route('index');}}">Home</a></li>
          <li>Accommodations</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- Family Room 1 -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/family1.png);" data-aos="zoom-in" data-aos-delay="100"></div>
          
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Family Room #1</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at Php 4,380.00 /night</h4>
            <p>Surrender to the blissful embrace of coolness in our
              air-conditioned santuary, where relaxation knows no bounds.
            </p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Air-conditioned Room</li>
                  <li>Private Comfort Room</li>
                  <li>Inlcudes 4 Bath Towels</li>
                  <li>Inlcudes 4 Complimentary Breakfast</li>
                  <li>Hot showers are not included</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Minimum of 4 persons</li>
                  <li>Maximum of 6 persons</li>
                  <li>Additional Php 750 per head with breakfast</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <!-- Family Room 2 -->
        <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Family Room #2</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at Php 6,000.00 /night</h4>
                <p>Make lasting memories with your loved ones in this comfortable and accommodating space. The perfect choice for 
                  your family vacation.</p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Air-conditioned Room</li>
                  <li>Private Comfort Room</li>
                  <li>Includes 6 Bath Towels</li>
                  <li>Inlcudes 6 Conmplimenrtary Breakfast</li>
                  <li>Hot showers are not included</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Minimum of 6 persons</li>
                  <li>Maximum of 8 persons</li>
                  <p>Additional Php 1,000 per head with breakfast</p>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/family2.png);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>
      </div>
    </section>

    <!-- Cabin -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/cabin.png);" data-aos="zoom-in" data-aos-delay="100"></div>
          
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Cabin</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at Php 4,290.00 /night</h4>
            <p>Unwind beneath the stars, surrounded by the enchanting allure of our Teepee Cabin,
              inviting you to rediscover the simplicity of life. Let the enchanment of our Teepee Cabin transport you to a world
              where simplicity and luxury blend seamlessly.
            </p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Air-conditioned Room</li>
                  <li>Private Comfort room</li>
                  <li>Inlcudes 2 Bath Towels</li>
                  <li>Inlcudes 2 Complimentary Breakfast</li>
                  <li>Hot showers are not included</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Minimum of 2 persons</li>
                  <li>Maximum of 3 persons</li>
                  <li>Additional Php per head with breakfast</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Villa AC Room -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Villa AC Room</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at Php 5,500.00 /night</h4>
                <p>Discover the allure indigenous living in out Teepee Villa, where
                  traditional comfort meets contemporary luxury.</p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Air-conditioned Room</li>
                  <li>Private Comfort Room</li>
                  <li>Includes 5 Bath Towels</li>
                  <li>Inlcudes 5 Complimentary Breakfast</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Minimum of 6 persons</li>
                  <li>Maximum of 7 perosons</li>
                  <p>Additional Php 1,000 per head with breakfast</p>
                </ul>
              </div>
            </div><!-- End Icon Box -->
          </div>
          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/villa.png);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>
      </div>
    </section>

    <!-- Beach Cabin -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/beach-cabin.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
          
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Beach Cabin</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at 5,000.00 /night</h4>
            <p>Step into a world of rustic elegance and be captivated by the 
              crazy ambiance of our Beach Cabin, where relaxation knows no bounds.
            </p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Air-conditioned Room</li>
                  <li>Private Comfort room</li>
                  <li>Includes 4 Bath Towels</li>
                  <li>Includes 4 Complimentary Breakfast</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Minimum of 4 persons</li>
                  <li>Maximum of 5 persons</li>
                  <p>Additional Php 1,000 per head with breakfast</p>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Boho AC Room -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Boho AC Room</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at Php 3,080.00 /night</h4>
                <p>Embrace the spirit of adventure and luxury as you embark on a 
                  remarkable stay in our Boho Room, where untamed beauty and modern
                  comforts collide.</p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Air-conditioned Room</li>
                  <li>Private Comfort Room</li>
                  <li>Inlcudes 2 Bath Towels</li>
                  <li>Includes 2 Complimentary Breakfast</li>
                  <li>Hot Showers are not included</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Minimum of 2 persons</li>
                  <li>Maximum of 3 persons</li>
                  <p>Additional Php 750 per head with breakfast</p>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/boho-room.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>
      </div>
    </section>

    <!-- Campsite -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/campsite.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
          
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Campsite Tent Rentals</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at Php 1,200 /night</h4>
            <p>Nestled right on the sandy shores of our beach resort, the Beachfront Paradise Tent offers an 
              unmatched tropical experience. This spacious and luxurious tent is perfect for those seeking a 
              cozy retreat with the soothing sounds of the ocean just steps away. 
            </p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Shared Bathroom</li>
                  <li>Includes Banig and Pillow</li>
                  <li>Bring your own tent, hammock, camping tables and chairs</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Minimum of 2 persons</li>
                  <li>Maximum of 3 persons</li>
                  <li>Additional Php 300 per head bring your own tables and chairs</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Teepee Hut Fan Room -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Teepee Hut Fan Room</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at Php 1,990.00 /night</h4>
                <p>Welcome to our tranquil beachfront teepee hut fan room, where the soothing rhythm of the waves and the gentle 
                  caress of the ocean breeze create an unforgettable atmosphere of relaxation. Nestled among the swaying palm trees, 
                  our teepee hut offers a unique and cozy escape. </p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Fan Room</li>
                  <li>Shared Bathroom</li>
                  <li>Inlcudes 2 Bath Towels</li>
                  <li>Includes 2 Complimentary Breakfast</li>
                  <li>Hot Showers are not included</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Maximum of 2 persons</li>
                  <p>Additional Php per head with breakfast</p>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/tepee-hut.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>
      </div>
    </section>

    <!-- Teepee Hut AC Room -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(web/asset/img/accomodations/ac-tepee.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
          
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Teepee Hut AC Room</h3>

            <!-- Rates -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4>Rate starts at Php 2,380.00 /night</h4>
            <p>The Teepee Hut is a tranquil retreat situated on the pristine shores of our beach resort. 
              As the gentle waves serenade your senses, this cozy accommodation offers a tranquil escape 
              from the world.
            </p>
              </div>
            </div>

            <!-- Features -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4>Features</h4>
                <ul>
                  <li>Air-conditioned Room</li>
                  <li>Shared Bathroom</li>
                  <li>Inlcudes 2 Bath Towels</li>
                  <li>Inlcudes 2 Complimentary Breakfast</li>
                  <li>Hot showers are not included</li>
                </ul>
              </div>
            </div>

            <!-- Capacity -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4>Capacity</h4>
                <ul>
                  <li>Maximum of 2 persons</li>
                  <li>Additional Php 750 per head with breakfast</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <!-- ======= Review Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Reviews</h2>
          <p>Paradise perfection is our goal, and your feedback is the compass that guides us there.</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset("web/assets/img/review/review-1.png")}}" class="testimonial-img" alt="">
                  <h3>Avery Taylor</h3>
                  <h4>ataylor@gmail.com</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    This beach resort was an absolute paradise. The breathtaking views and pristine beachfront made for a dream 
                    vacation. The staff went above and beyond to make our stay unforgettable. Their hospitality and attention to 
                    detail were outstanding.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset("web/assets/img/review/review-2.png")}}" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>mattbrandon@gmail.com</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    We loved the variety of activities offered, from water sports to beachfront yoga. There was always something 
                    exciting to do. The resort's dining options were exceptional. We indulged in delicious cuisine with a view that's 
                    hard to beat.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset("web/assets/img/review/review-3.png")}}" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>larsonj@gmail.com</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The kids' club was a hit with our family. It provided a safe and entertaining space for our children, allowing us 
                    to relax.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset("web/assets/img/review/review-4.png")}}" class="testimonial-img" alt="">
                  <h3>Jenna Dy</h3>
                  <h4>itsjennady@gmail.com</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    The resort's location was ideal, with easy access to the beach and nearby attractions. It's the perfect spot for 
                    a tropical getaway.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset("web/assets/img/review/review-5.png")}}" class="testimonial-img" alt="">
                  <h3>Mark Chelsea</h3>
                  <h4>mark323@gmail.com</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Our stay at this beach resort was an experience we'll cherish forever. It was the perfect escape from the daily 
                    grind. We also appreciated the resort's commitment to cleanliness and safety, which allowed us to enjoy our stay 
                    with peace of mind.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

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
  <script src="{{asset("web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("web/assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("web/assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset("web/assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("web/assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{asset("web/assets/vendor/purecounter/purecounter_vanilla.js")}}"></script>
  <script src="{{asset("web/assets/vendor/php-email-form/validate.js")}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset("web/assets/js/main.js")}}"></script>

</body>

</html>