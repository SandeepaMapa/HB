<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - Dayouts</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    
  </head>

  <body class="bg-light">
    
<!--Header-->
  <?php require('inc/header.php'); ?>
    
   <br>
     
           <img src="Photos\Events\Party2.jpg" class="w-100 d-block" height="550"/>
         
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
<h6 class=" text1 text-left"><a href="index.php" style="text-decoration:none">HOME</a> &nbsp > &nbsp <a href="Events.php" style="text-decoration:none">EVENTS</a> &nbsp > &nbsp DAYOUTS</h6>

   <!--Topics-->
   <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">DAYOUTS</h2>
    <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
      These services are a wonderful way to add a unique element to your special event.
      Regardless of what your Event Hosting needs are, we guarantee that the River's Edge team can manage every request to your precise specifications.
      Our Event Hosting services are ready for your celebration so get the party started and contact us today<br>
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
  <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 text-white border-white " data-bs-toggle="modal" data-bs-target="#loginModal">
  Login
</button>
<button type="button" class="btn btn-outline-dark shadow-none text-white border-white" data-bs-toggle="modal" data-bs-target="#registerModal">
  Register
</button>

<!-- Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>
          User Login</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
        <label  class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none">
         
      </div>

      <div class="mb-4 ">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control shadow-none">
      </div> 

      <div class="d-flex align-items-center justify-content-between mb-2">
        <button type="submit" class="btn btn-dark shadow-none">LOGIN  </button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
      </div>
          
        </div>
        
        </form>
      </div>
    </div>
  </div>

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

           <div class=" mt-3">
          <label  class="form-label" style="font-weight: 500;">Contact Number</label>
        <input type="text" class="form-control shadow-none">
           </div>

           <div class="row">
           <div class="mt-3">
                <label class="form-label" style="font-weight: 500;">Expected Date</label>
                <input type="date" class="form-control shadow-none">
              </div>

              <div class="mt-3">
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