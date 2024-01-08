<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Title -->
  <title>@yield('title', 'Authentication ')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
<style>

    *   {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
<<<<<<< Updated upstream

=======

    .image {
        display: inline-block;
        vertical-align: top;
        width: 40%;

    }

    img {
        width: auto;
        height: auto;
        margin-left: -27%;
        object-fit: cover;
    }


    .form {
        display: inline-block;
        vertical-align: top;
        width: 45%;
        margin-left:13%;

    }

    .imageSignUp {
        display: inline-block;
        vertical-align: top;
        width: 40%;

    }

    #regis {
        width: 600px;
        height: 600px;
        margin-left: -10%;
        object-fit: cover;
    }


    .formSignUp {
        display: inline-block;
        vertical-align: top;
        width: 45%;
        margin-left: -95%;

}

>>>>>>> Stashed changes
    .background{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height:100vh;
        height: 100%;
        background: linear-gradient(90deg, #ffffff 50%, #018274 50%);

    }
    .wrapper {
        width: 80%;
        border: 2px solid rgba(255, 255, 255, 0.1);
        color: #000000;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 30px 40px;
    }

    .wrapper .image {

    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        height: 50%;
    }

    .wrapper h1{
        font-size: 36px;
        text-align: center
    }

    .wrapper h2{
        font-size: 30px;
        text-align: center
    }

    .wrapper h6{
        font-size: 16px;
        text-align: center;

    }

    .wrapper h5{
        font-size: 16px;
        text-align: center;

    }

    .wrapper .input-box {
        width: 100%;
        height: 50px;
        margin: 30px 0;
    }

    .input-box input {
        width: 100%;
        height: 100%;
        background: transparent;
        background-color: rgba(231,238,238,255);
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 40px;
        font-size: 16px;
        color: #000000;
        padding: 20px 45px 20px 20px;
    }

    .input-box input::placeholder{
        color: rgb(122, 122, 122);
    }

    .wrapper .remember-forgot {
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;
    }

    .remember-forgot label input {
        accent-color: #ffffff;
        margin-right: 3px;
    }


    .remember-forgot a {
        color: #000000;
        text-decoration: none;
    }

    .remember-forgot a:hover {
        text-decoration: underline;
    }

    .wrapper .btn {
        width: 100%;
        height: 45px;
        background: #018274;
        border: none;
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        font-size: 16px;
        color: #ffffff;
        font-weight: 600;
    }


    .wrapper .register-link {
        font-size: 14.5px;
        text-align: center;
        margin: 20px 0 15px;
    }

    .register-link p a {
        color: #000000;
        text-decoration: none;
        font-weight: 600;
    }

    .register-link p a:hover {
        text-decoration: underline;
    }

</style>

<body class="background">
    @yield('content')
</body>

</html>
