<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haven Campsite Liwliwa</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Haven Campsite Resort</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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

  
    <!-- Favicons -->
    <link href="web/asset/img/favicon.png" rel="icon">
    <link href="web/asset/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="web/asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="web/asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="web/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="web/asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="web/asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="web/asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="web/asset/css/main.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="web/css/style.css" />
    <style type="text/css">
       .booking-form .booking-bg {
	position: absolute;
	left: 25px;
	top: -25px;
	bottom: -25px;
	width: 400px;
	background-image: url('web/asset/img/accomodations/villa.png');
	background-size: cover;
	background-position: center;
	padding: 25px;
	border-radius: 6px;
	-webkit-box-shadow: 0px 5px 10px -5px rgba(0, 0, 0, 0.1);
	box-shadow: 0px 5px 10px -5px rgba(0, 0, 0, 0.1);
	overflow: hidden;
  
}
small:hover{
        color: #caa12e;
        cursor: pointer;
      }
  

    </style>

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
          <li class="dropdown"><a href="#"><span>Contact Us</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="{{route('contacts');}}">Contact and Location</a></li>
              <li><a href="{{route('faqs');}}">FAQs</a></li>
            </ul>
          </li>
          <li><a href="{{route('booknow');}}" class="active">Book Now</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="main">
    
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('web/asset/img/events/event-banner.png');">    
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      
              <h2>Availability</h2>
              <ol>
                <li><a href="{{route('index');}}">Home</a></li>
                <li>Checking Availability
                </li>
              </ol>
      
            </div>
          </div><!-- End Breadcrumbs -->


      
          <?php      
    // <!-------kUKUNIN YUNG CHECK IN TSAKA CHECK OUT NA INPUT-------------->
    $checkIn = $checkIn ?? '';
    $checkOut = $checkOut ?? '';
    
    // <!-------DATABASE FETCHING-------------->
    $reservations = DB::table('reservations')
                    ->select('roomID', 'checkIn', 'checkOut')
                    ->where(function($query) use ($checkIn, $checkOut) {
                        $query->whereBetween('checkIn', [$checkIn, $checkOut])
                            ->orWhereBetween('checkOut', [$checkIn, $checkOut])
                            ->orWhere(function($query) use ($checkIn, $checkOut) {
                                $query->where('checkIn', '<=', $checkIn)
                                    ->where('checkOut', '>=', $checkOut);
                            });
                    })
                    ->get();

    $reservedRoomIDs = $reservations->pluck('roomID')->toArray();
    $allRooms = DB::table('rooms')->get();

    $availableRoomFound = false; // Variable to track available room
    ?>



@if($allRooms->count() > 0)

  <!-------DITO FECTHING NA, $room NA YUNG GINAMIT INSTEAD OF $post-------------->
    @foreach($allRooms as $room)
        @if(!in_array($room->id, $reservedRoomIDs))
            @php $availableRoomFound = true; @endphp <!-- Set flag if an available room is found -->
            <div id="booking" class="section">
              <div class="section-center">
                  <div class="container">
                      <div class="row">
                          <div class="booking-form">
                              <div class="booking-bg">      
                                <!-- DITO YUNG SA IMAGE PALITAN NYO NALANG YUNG SIZES IF NEEDED -->
                                <img src="data:image/jpeg;base64,{{ base64_encode($room->Image) }}" alt="Image" width="500" height="400">
                              </div>
                              <form action="{{ route('room.create') }}" method="post">
                              @csrf
                              <!-- Room Name -->
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <span class="form-label"></span>
                                          <input class="hide" name="roomId" value="{{ $room->id }}">
                                          <input class="hide" name="roomName" value="{{ $room->Name }}">
                                          <input class="hide" name="roomPrice" value="{{ $room->Price }}">
                                          <h1>{{ $room->Name }}</h1>
                                      </div>  
                                  </div>
                              </div>
                              <!-- Price/Rate -->
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <span class="form-label">Php {{ $room->Price }}<small>/night</small></span>
                                      </div>
                                  </div>
                              </div>
                              <!-- Capacity -->
                              <div class="form-group">
                                  <span class="form-label">Capacity</span>
                                  <ul>
                                      <li>Minimum of {{ $room->min }} persons</li>
                                      <li>Maximum of {{ $room->max }} persons</li>
                                      <li>Additional Php 1000 per head with breakfast</li>
                                  </ul>
                              </div>
                              <!-- Features -->
                              <div class="form-group">
                                  <span class="form-label toggle"><small>Features</small></span>
                                  <ul class="answer">
                                      <li>Air-conditioned Room</li>
                                      <li>Private Comfort Room</li>
                                      <li>Includes 5 Bath Towels</li>
                                      <li>Includes 5 Complimentary Breakfast</li>
                                  </ul>
                              </div>
                                  <!-----------KAPAG DI NA AVAILABLE MAGHAHIDE YUNG BUTTON PERO WALA NA TO-------------------->
                                  @if(in_array($room->id, $reservedRoomIDs))
                                      <p>This room is already reserved for the specified dates.</p>
                                  @else
                                      <!-- Display room details -->
                                      <!-- ... -->
                                      <button class="submit-btn">Book Now</button>
                                  @endif
                              </form>
                          </div>
                      </div>
                  </div>
              </div>       
            </div>
        @endif
    @endforeach
@endif


  </main>

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
</body>
</html>