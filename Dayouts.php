<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>River's Edge - Dayouts</title>   
    <meta content="" name="description">
    <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="New.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>  
  </head>

  <body>
    
<!--Header-->
  <?php require('inc/header.php'); ?>

<img src="Photos\Restaurant\dine-in1.jpg" class="w-100 d-block" height="550"/>
  <br>

  <h6 class=" text1 text-left"><a href="index.php" style="text-decoration:none">HOME</a> &nbsp > &nbsp <a href="Events.php" style="text-decoration:none">Events</a> &nbsp > &nbsp Dayouts</h6>
  
  <!--Topics-->
   <div class=" px-4">
    <h2 class=" pt-4 mb-4 text-center fw-bold f2">Dayouts</h2>
    <div class="h-line bg-dark"></div>
  </div>
  <!--Topic End -->
  
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row justify-content-center">

          <div class="col-lg-4 ">
            <img src="Photos\Menus\DayOut Resized.png"></img>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

            <div class="content">
              <h3>Who needs a  <strong>Perfect Gateaway?</strong></h3>
              <p>
              We believe that spontaneity is good for health. Breaks are even better. 
                  So call up the old gang from school, hop on a vehicle and escape the city for a day.
                  Here’s a list of day out packages, so you can break away from the burdens of life for a bit. 
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> <span>Time :</span>9AM to 5PM </li>
                <li><i class="bx bx-check-double"></i> <span>Package Includes : Lunch, Evening snack and tea, complimentary room, pool access, pet-friendly environment  </span>9AM to 5PM </li>
                <li><i class="bx bx-check-double"></i> <span>Child policy :</span>50% off upto 6 years</li>
                <li><i class="bx bx-check-double"></i> <span>Special Conditions :</span>50% off upto 6 years</li>
              </ul>
              <p>
                
              </p>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End About Section -->

            <!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
  <div class="container">

    <div class="section-title">
      <h2>Book a <span>Table</span></h2>
    </div>

    <form  method="post" role="form" class="php-email-form">
      <div class="row">
      

<div class=" col-lg-4 col-md-6 form-group mt-3 ">
<input name="name" required type="text" placeholder="Your Name" class="form-control shadow-none">
   </div>

   <div class=" col-lg-4 col-md-6 form-group mt-3 ">
<input name="email" required type="email" placeholder="Your Email" class="form-control shadow-none">
   </div>

   <div class=" col-lg-4 col-md-6 form-group mt-3 ">
<input name="phone" required type="text" placeholder="Your Phone Number" class="form-control shadow-none">
   </div>

   <div class=" col-lg-4 col-md-6 form-group mt-3 ">
<input name="date" required type="date" placeholder="Date" class="form-control shadow-none">
   </div>

   <div class=" col-lg-4 col-md-6 form-group mt-3 ">
<input name="time" required type="time" placeholder="Reservation Time" class="form-control shadow-none">
   </div>

   <div class=" col-lg-4 col-md-6 form-group mt-3 ">
<input name="qty" required type="number" placeholder="No of people" class="form-control shadow-none">
   </div>

   <div class=" form-group mt-3">
<textarea name="message" placeholder="Extra Notes" required  class ="form-control shadow-none" rows="5" style="resize:none;"></textarea>
   </div>
   
        

      
    </form>
    <div class="text-center"><button class="btn btn-primary" type="submit" name="send">Reserve Table</button></div>
    
  </div>
</section><!-- End Book A Table Section -->

  </main><!-- End #main -->

 <br><br><br><br>

<!--Footer-->
  <?php require('inc/footer.php'); ?>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Disabling Past Date -->
<script src="assets/js/main.js"></script>
<script>
  var date = new Date();
  
  var tdate = date.getDate();
  var month = date.getMonth() +1;
  var year = date.getUTCFullYear() - 0;
  if (month < 10) {
      month = '0' + month
  }
  if (tdate < 10) {
    tdate = '0' + tdate;
  }
  var minDate = year + "-" + month + "-" + tdate; //dte format
  document.getElementById("date").setAttribute("min", minDate);
  console.log(minDate);
</script>
</body>
</html>