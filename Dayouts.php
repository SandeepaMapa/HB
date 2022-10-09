<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - Dayouts</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

  <div class="card mb-3 border-0 shadow">
       <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
         <img src="Photos\Gallery\rest.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-4 px-md-3 px-0">
         <h4 class="mb-3">Dayout Packages</h4>
           <div class="features mb-3">
                <h6 class="mb-1"></h6>
                
            </div>
          </div>   
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
          <h6 class="mb-4"></h6>  
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Reservation</a>
            <a href="BBQ.php" class="btn btn-sm w-100 btn-outline-dark shadow-none" 
            data-toggle="modal" data-target="#basicModal_V-align">View Menus</a>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6 col-md-6 mb-5 px-4">
    <div class="bg-white rounded shadow p-4 ">

  
  
<!--Starting Basic Modal________________________________________________________________________________________ -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal_V-align">
            Basic Modal Vertical
        </button>
        <!--Basic modal-->
        <div class="modal" tabindex="1" role="dialog" id="basicModal_V-align" >
            <div class="modal-dialog modal-dialog-centered" role="document">

                <!--Model Content
                There is a header/ content/ footer in a model-->
                <div class="modal-content">
                  

                    <!--Body
                    We can put anything in the body; either text or tables or badges or whatever we want-->
                    <div class="modal-body">
                        <img src ="Photos\Menus\DayOut Resized.png">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                        <button type="button" class="btn btn-primary"> Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Ending Basic Modal________________________________________________________________________________________ -->



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

 <!--adding js CDN -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
</body>
</html>