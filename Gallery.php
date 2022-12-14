<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - Gallery</title>
    
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    
    <!--Styling the border of the box-->
    <style>
      .pop:hover{
        border-top-color: var(--teal) !important;
        transform: scale(1.03 );
        transition: all 0.3s;
      }
    </style>
  </head>

  <body class="bg-light">
    
<!--Header-->
  <?php require('inc/header.php'); ?>
    

  <!--Topics-->
  <div class=" px-4">
  <h2 class=" pt-4 mb-4 text-center fw-bold f2">GALLERY</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mx-5 mt-3">
  Celebrate your love story amidst plush greenery and the magic of River's Edge Reception.<br>
       This is an OUT OF THIS WORLD venue! In our aspiration to offer a myriad of
        services that will encompass a true Rivery experience,
       we are also prepared to assist you, with your corporate requirements.
       Join us, as we conjure the ideal combination of rest and relaxation
        along with the corporate requirements of today’s fast paced lifestyle.
  </p>
  </div>

  <h5 class="my-5 fw-bold h-foot text-center">Hotel view</h5>
      <div class="container px-6">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\view.jpg" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\view2.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\view3.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\view.jpg" class="w-100">
        
        </div>

      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>
    

      <h5 class="my-5 fw-bold h-foot text-center">Accomodation</h5>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\r1.jpg" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\r2.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\r3.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\r4.jpg" class="w-100">
        
        </div>

      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>
      
      <h5 class="my-5 fw-bold h-foot text-center">Restaurant</h5>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\rest.jpg" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\rest1.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\rest2.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\rest3.jpg" class="w-100">
        s
        </div>

      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>
  



     <h5 class="my-5 fw-bold h-foot text-center">Events</h5>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\e1.jpg" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\e2.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\e3.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\e4.jpg" class="w-100">
        
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