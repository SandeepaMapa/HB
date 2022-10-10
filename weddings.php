<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - Weddings</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    
  </head>

  <body class="bg-light">
    
<!--Header-->
  <?php require('inc/header.php'); ?>
    
   <br>
     
           <img src="Photos\Events\50.jpg" class="w-100 d-block" height="550"/>
         
  <!--slider-->
  <div class="container px-4">
        <!-- Swiper -->
      <div class="swiper mySwiper">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Demo\R1.jpeg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Front\3rd dec.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Front\3rd dec.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Front\3rd dec.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>

        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
          <img src="Photos\Front\3rd dec.jpg" class="w-100">
          <h5 class="mt-2">Random Name</h5>
        </div>
        
      </div>
      <div class="swiper-pagination"></div>
      </div>
      </div>
 
<br>
<h6 class=" text1 text-left"><a href="index.php" style="text-decoration:none">HOME</a> &nbsp > &nbsp <a href="Events.php" style="text-decoration:none">EVENTS</a> &nbsp > &nbsp WEDDINGS</h6>

   <!--Topics-->
   <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">WEDDINGS</h2>
    <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
      The tearful smiles of the walk down the aisle. The first kiss as a couple.
      The celebrations that follow. Your wedding is a chance to craft moments that will last you a lifetime.
      At River's Edge, we want those moments to be truly memorable.<br>
      </p>
  </div>

    <!--Services-->

  <div class="container">
<div class="row">
  <div class="col-lg-6 col-md-6 mb-5 px-4">
    <div class="bg-white rounded shadow p-4 ">
  <h5>Free Services</h5>
  <ul class="list-unstyled">
    <li>Decorations</li>
    <li>Oil Lamp</li>
    <li>Registration Table</li>
    <li>Car Park</li>
  </ul>
  <br>
  <h5>Payable Other Services</h5>
  <ul class="list-unstyled">
    <li>Decorations</li>
    <li>Oil Lamp</li>
    <li>Registration Table</li>
    <li>Car Park</li>
  </ul>
     

</div>
</div>

<!--Information Form-->
<div class="col-lg-6 col-md-6  px-4">
    <div class="bg-white rounded shadow p-4 ">
      <form>
        <h5> Send Us Your Details </h5>
        <p>Make your dreams come true with our impeccable event planning service. 
          Simply provide us with your information and our highly professional 
          concierge will get in touch to serve you</p>
        <div class=" mt-3">
          <label  class="form-label" style="font-weight: 500;">Full Name</label>
        <input type="text" class="form-control shadow-none">
           </div>

           <div class=" mt-3">
          <label  class="form-label" style="font-weight: 500;">Email Address</label>
        <input type="email" class="form-control shadow-none">
           </div>
           <div class="row align-items-end">   
          </div>
           <div class=" mt-3">
             <label  class="form-label" style="font-weight: 500;">Contact Number</label>
            <input type="text" class="form-control shadow-none">
        
           </div>

           <div class="row align-items-end">
           <div class="col-lg-5 mb-3 mt-3">
                <label class="form-label" style="font-weight: 500;">Expected Date</label>
                <input type="date" class="form-control shadow-none">
              </div>

              <div class="col-lg-5 mb-3 mt-3">
                <label class="form-label" style="font-weight: 500;">Expected Crowd</label>
                <input type="number" min="50" max="300" class="form-control shadow-none">
              </div>
           </div>
      <br>
              <select class="form-select" aria-label="Default select">
                <option selected>Event Time</option>
                <option value="1">Day</option>
                <option value="2">Night</option>
                <option value="3">All Day</option>
              </select>

          <div class="mt-3">
                <label class="form-label" style="font-weight: 500;">Do you need an extra Guestroom?</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">No</label>
            </div>
          </div>

           <div class=" mt-3">
          <label  class="form-label" style="font-weight: 500;">Additional Information</label>
        <textarea class ="form-control shadow-none" rows="5" style="resize:none;"></textarea>
           </div>
           <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
      </form>
</div>
</div>
<!--Information Form Ends-->

</div>
  </div>

 <br><br><br><br>

 

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