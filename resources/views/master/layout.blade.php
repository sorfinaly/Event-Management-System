<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Event in IIUM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Favicons -->
  <link href="assets/img/iium-logo.png" rel="icon">
  <link href="assets/img/iium-logo.png" rel="apple-touch-icon"><link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<style>
    .intro {
        height: 100%;
    }
    .form-control {
        border-color: transparent;
    }

    .input-group>.form-control:focus {
        border-color: transparent;
        box-shadow: inset 0 0 0 1px transparent;
    }


    .form-control::placeholder {
        color: #7a6767;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 1;
        margin-right: 100px; /* Add some margin between form groups */
        margin-top: 10px;
    }
    .form-control {
        height: 50px; /* Adjust the height as needed */
        border-color: transparent;
    }

    #search::placeholder{
        color: #eee2e2;
    }

    .search{
        background-color: transparent;
        background-repeat: no-repeat;
        border: none;
        cursor: pointer;
        overflow: hidden;
        outline: none;
    }


    #basic-addon2{
        background-color: transparent;
        background-repeat: no-repeat;
        border: none;
        cursor: pointer;
        overflow: hidden;
        outline: none;
    }

    .form-background {
        background-color: #d3e4e3; /* Adjust background color as needed */
        border-radius: 20px; /* Adjust border radius for curvature */
        padding: 70px; /* Add padding for spacing */
        margin: 70px; /* Add margin for spacing */
        margin-top: 20px;
    }

    .background{
        padding: 10px; /* Add padding for spacing */
        margin-top: 150px;
    }

    h2{
        color: #585555;
        font-weight: 700;
        text-align: left;
        padding-left:80px;
        padding-bottom: 20px;

    }
    #submit{
        /* Right alignment */
        text-align: right; /* Align text within the button */
        float: right; /* Float the button to the right */
        /* margin-right: 0px; Add some space on the right */

        /* Larger size */
        padding: 15px 30px; Increase padding for a larger button area
        font-size: 16px; /* Increase font size for better readability */
    }

    .btn {
        background-color: #2A6562; /* Blue */
        color: #fff; /* White text */
    }

    /* Hover effect (optional) */
        .btn:hover {
        background-color: #192f2e; /* Darker blue on hover */
    }




    /* profile styling */

    .card-body h5{
        font-weight: bold;
        margin-bottom: 30px;
    }

    .texts {
        margin-left: 30px;
        margin-top: 30px;
    }

    .profile {
        height: 50%;
        width: 50%;
        border-radius: 50%;
    }

     /* Custom styles for placeholder text */
     .form-control::placeholder {
            color: #6c757d;
        }

        /* Curved input */
        .form-control {
            border-radius: 10px;
            margin-top: 10px;
        }

        /* Grey placeholder line */
        .form-control {
            border: 1px solid #6c757d;
        }

        /* Profile picture styling */
        .profile-pic {
            border-radius: 50%;
            height: 400px;
            width: 400px;
            margin-right: 40px;
        }

        /* Additional information styling */
        .profile-info {
            margin-top: 20px;
        }

        /* Center the card title */
        .card-title {
            text-align: center;
        }


        /* .button-delete {
            background-image: linear-gradient(#ec4245, #c90000);
            border: 1px solid red;
            border-radius: 4px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            direction: ltr;
            display: block;
            font-family: "SF Pro Text","SF Pro Icons","AOS Icons","Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 17px;
            font-weight: 400;
            letter-spacing: -.022em;
            line-height: 1.47059;
            min-width: 30px;
            overflow: visible;
            padding: 4px 15px;
            text-align: center;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            float: right;
        }

        .button-delete:disabled {
            cursor: default;
            opacity: .3;
        }

        .button-delete:hover {
            background-image: linear-gradient(#ec4245, #c90000);
            border-color: maroon;
            text-decoration: none;
        }

        .button-delete:active {
            background-image: linear-gradient(#ec4245, #c90000);
            border-color: red;
            outline: none;
        }

        .button-delete:focus {
            box-shadow: rgba(131, 192, 253, 0.5) 0 0 0 3px;
            outline: none;
        } */

        .info {
            margin-left: 30px;
            width: 100%;
        }



        /* .button-profileupdate {
            background-image: linear-gradient(#4fc3b6, #018274);
            width: 200px;
            border: 1px solid #018274;
            border-radius: 4px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            direction: ltr;
            display: block;
            font-family: "SF Pro Text","SF Pro Icons","AOS Icons","Helvetica Neue",Helvetica,Arial,sans-serif;
            font-size: 17px;
            font-weight: 400;
            letter-spacing: -.022em;
            line-height: 1.47059;
            overflow: visible;
            padding: 4px 15px;
            text-align: center;
            vertical-align: baseline;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            margin-right:0%;
            float: right;
        }

        .button-profileupdate:disabled {
            cursor: default;
            opacity: .3;
        }

        .button-profileupdate:hover {
            background-image: linear-gradient(#4fc3b6, #018274);
            border-color: #03b5a0;
            text-decoration: none;
        }

        .button-profileupdate:active {
            background-image: linear-gradient(#4fc3b6, #018274);
            border-color: #018274;
            outline: none;
        }

        .button-profileupdate:focus {
            box-shadow: rgba(131, 192, 253, 0.5) 0 0 0 3px;
            outline: none;
        } */

        .alignment {
            margin-left: 100px;
        }


        .button-profileupdate {
            background-color: #018274;
            border: 1px solid #018274;
            border-radius: 6px;
            box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            font-weight: 400;
            outline: none;
            outline: 0;
            padding: 10px 25px;
            text-align: center;
            transform: translateY(0);
            transition: transform 150ms, box-shadow 150ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            float: right;
        }

        .button-profileupdate:hover {
            box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
            transform: translateY(-2px);
        }

        @media (min-width: 768px) {
        .button-profileupdate {
            padding: 10px 30px;
        }
        }


        .button-delete {
            background-color: maroon;
            border: 1px solid maroon;
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            font-weight: 400;
            outline: none;
            outline: 0;
            padding: 10px 25px;
            text-align: center;
            transform: translateY(0);
            transition: transform 150ms, box-shadow 150ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            float: right;
        }

        .button-delete:hover {
            box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
            transform: translateY(-2px);
        }

        @media (min-width: 768px) {
        .button-delete {
            padding: 10px 30px;
        }
        }


        .button-confirm-delete {
            background-color: maroon;
            border: 1px solid maroon;
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            font-weight: 400;
            outline: none;
            outline: 0;
            padding: 10px 25px;
            text-align: center;
            transform: translateY(0);
            transition: transform 150ms, box-shadow 150ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            margin-top: 10px;
        }

        .button-confirm-delete:hover {
            box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
            transform: translateY(-2px);
        }

        @media (min-width: 768px) {
        .button-confirm-delete {
            padding: 10px 30px;
        }
        }

</style>
</head>

<body>


  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/homepage" class="logo d-flex align-items-center">
        <img src="assets/img/iium-logo.png" alt="">
        <h1>EVENT IN IIUM   <span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/homepage">Home</a></li>
          <li><a href="/createevent">Create an Event</a></li>
          <li><a href="/profile">Profile</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
          {{-- <li><a href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li> --}}

        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-4 justify-content-between">
        <div class="col-lg-5 col-md-12 footer-info text-center">
          <a href="/" class="logo d-flex align-items-center">
            <span class="title">EVENT IN IIUM </span>
          </a>
          <p class="event-description">Your one-stop platform for seamless event management. Create, organize, and manage events effortlessly. Join as a committee member to help shape memorable experiences or participate in diverse events. Simplifying your event journey at IIUM.</p>

        </div>



        <div class="col-lg-2 col-6 footer-links">
          <h4>Features</h4>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#portfolio">Event Details</a></li>
            <li><a href="/profile">Profile</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <div class="social-links d-flex mt-4">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>IIUM</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
