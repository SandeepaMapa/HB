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
  <div class="my-5 px-4">
  <h2 class="fm-bold h-font text-center">Gallery</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-4">
  Celebrate your love story amidst plush greenery and the magic of River's Edge Reception.<br>
       This is an OUT OF THIS WORLD venue! In our aspiration to offer a myriad of
        services that will encompass a true Rivery experience,
       we are also prepared to assist you, with your corporate requirements.<br>
       We spare no effort in ensuring that all corporate retreats,
       outings and events are carried out with the zest and professionalism required
        to ensure all your events a veritable success.<br> 
       Join us, as we conjure the ideal combination of rest and relaxation
        along with the corporate requirements of today’s fast paced lifestyle.
  </p>
  </div>




  <h5 class="mb-3 ms-3">Hotel view</h5>
      <div class="container px-6">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\view.jpg" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\view.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\view.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\view.jpg" class="w-100">
        
        </div>

      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>
    


      <h5 class="mb-3 ms-3">Standard Room</h5>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\ch.png" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\ch.png" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\ch.png" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\ch.png" class="w-100">
        
        </div>

      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>
    



      <h5 class="mb-3 ms-3">villa</h5>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\Villa.jpg" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\Villa.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\Villa.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\Villa.jpg" class="w-100">
        
        </div>

      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>




      <h5 class="mb-3 ms-3">Challet</h5>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\standard_ph01.jpg" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\standard_ph01.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\standard_ph01.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Rooms\standard_ph01.jpg" class="w-100">
        
        </div>

      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>





      <h5 class="mb-3 ms-3">Weddings</h5>
      <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\wed1.jpg" class="w-100">
         
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\wed1.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\wed1.jpg" class="w-100">
          
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Gallery\wed1.jpg" class="w-100">
        
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