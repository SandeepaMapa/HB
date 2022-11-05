<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - About Us</title>
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

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
<div class="my-3 px-4">
<h2 class="mt-3 pt-4 mb-4 text-center fw-bold f2">ABOUT US</h2>
  <div class="h-line bg-dark"></div>
  </div>
  
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <p>
        <b><i>River's Edge</i></b> is set in the peaceful village of Madampagama, just a few minutes from the Galle coastal road. 
        The property features more than ten stunning Challets, the main Villa, 1 big reception hall and a 13m pool, 
        which sit within an elegantly landscaped tropical garden of mango. amberella and coconut trees, deep purple orchids and giant ferns.
        </p>
        <p>The name 'Rivers Egde' derives from the beautiful madampa river flowing behind the Premises.
          During april you can see hundreds of jelly fish swimming in the river, and that is the most beautiful thing you wil ever see</p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
          <img src="Photos\Gallery\view2.jpg" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="Photos\Facilities\bed.png" width="100">
        <h4>10+ Rooms</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="Photos\Facilities\swimming.png" width="100">
        <h4>Swimming Pool</h4>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="Photos\Facilities\hall.png" width="100">
        <h4>Wedding Hall</h4>
      </div>
    </div>

      <div class="col-lg-3 col-md-6 mb-4 px-4">
    <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
      <img src="Photos\Facilities\icons8-valet-parking-50.png" width="100">
        <h4>Valet Parking</h4>
      </div>
    </div>
    
    </div>
    </div>

    <h3 class="my-5 fw-bold h-foot text-center">MANAGEMENT TEAM</h3>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">

      
        <!--

        $about_r = selectALL('team_details');
        $path    =ABOUT_IMP_PATH;
        while($row = mysqli_fetch_assoc()){
          echo<<<data
          <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="$path$row[picture]" class="w-100">
            <h5 class="mt-2">$row[name]</h5>
          </div>
          data;
        }
        -->
      

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\about\Director.jpg" class="w-100">
          <h5 class="mt-2">Director<br>Mr Lal De Silva</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\about\HR Manager.jpg" class="w-100">
          <h5 class="mt-2">HR Manager<br>Mr Harindu Gunasekara</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\about\head chef.jpg" class="w-100">
          <h5 class="mt-2">Head Chef<br>Mr Harindra Kularathna</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\about\bbq.jpg" class="w-100">
          <h5 class="mt-2">BBQ Chef<br>Mr Shamika Senadeera</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\about\hos.jpg" class="w-100">
          <h5 class="mt-2">Hospitality Manager<br>Mrs Chandhi Rodrigo</h5>
        </div>

        
        
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
    slidesPerView :4,
    spaceBetween:40,
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      320: {
        slidesPerView:1,
      },
      640: {
        slidesPerView:1,
      },
      768: {
        slidesPerView:2,
      },
      1024: {
        slidesPerView:3,
      },
    }
  });
</script>
</body>
</html>