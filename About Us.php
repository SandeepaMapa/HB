<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - About Us</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <link
    href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php require('inc/links.php'); ?>
    <style>
      .box{
        border-top-color: var(--teal) !important;
      }
    </style>
    
  </head>

  <body class="bg-light">
    
<!--Header-->
  <?php require('inc/header.php'); ?>
    

<!--Topics-->
<div class="my-5 px-4">
  <h2 class="fm-bold h-font text-center">About Us</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Lorem ipsum dolor sit amet consectetur adipisicing elit.
     Quas tempora quaerat ratione facere fugit soluta non obcaecati? Doloribus ad ex quia debitis<br>
      magni recusandae facere ipsum? Eius est corrupti tempora!
  </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3">hello how are yo</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Qui consectetur iusto dolorem veniam dicta, quam
          accusantium sequi, porro atque id eveniet cumque voluptas possimus! Quasi animi aperiam esse sequi doloremque!
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
          <img src="Photos\Facilities\VAGO.png" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="xampp\htdocs\HB\Photos\Rooms\rooms.com" width="100">
        <h4>100+ Rooms</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="xampp\htdocs\HB\Photos\Rooms\rooms.com" width="100">
        <h4>100+ Rooms</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="xampp\htdocs\HB\Photos\Rooms\rooms.com" width="100">
        <h4>200+ Customers</h4>
      </div>
    </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="xampp\htdocs\HB\Photos\Rooms\rooms.com" width="100">
        <h4>100+ Rooms</h4>
      </div>
    </div>
    
    </div>
    </div>

    <h3 class="my-5 fw-bold h-foot text-center">MANAGEMENT TEAM</h3>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide">
          <img src="C:\xampp\htdocs\HB\Photos\Rooms\ch.png" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>
    




    <!--Footer-->
  <?php require('inc/footer.php'); ?>


  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
  });
</script>
</body>
</html>