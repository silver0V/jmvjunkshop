<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  <title>JMV Junkshop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="assets/images/jmvname.png" rel="icon">
  <!-- <link href="assets/img/jmvlogotrans.png" rel="apple-touch-icon"> -->
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Neon&display=swap" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
    <!-- =======================================================
    * Template Name: NewBiz
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!-- Uncomment below if you prefer to use an text logo -->
        <!-- <h1><a href="index.html">NewBiz</a></h1> -->
        <a href="index.php"><img src="images/jmvlogotrans.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#">Services</a></li>
          <li class="dropdown"><a href="#"><span>Recycle Right</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Proper Waste Segregation</a></li>
              <li><a href="#">What Can Be Recycled?</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#">About Us</a></li>
          <li><a class="nav-link scrollto " href="feedback.php">Feedback</a></li>
          <li><a class="nav-link scrollto" href="#">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- #header -->
	
	<br>
	<h2>Feedback Page</h2>
    <hr style="height:1px;background-color:black">
    <form action="send.php" method="POST">
        Name <br>
        <input type="text" size="50" name="name" value=""> <br>
        <br>
        Email Address <br>
        <input type="email" size="50" name="email" value=""> <br>
        <br>
        Message <br>
        <textarea id="freeform" name="message" rows="4" cols="50"></textarea><br>
        <br>
        <hr style="height:1px;background-color:black">
        <button type="submit" name="send">Send E-mail</button>
    </form>
</body>
</html>