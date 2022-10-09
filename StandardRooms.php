<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - Events</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    
    <!--Styling the border of the box-->
    <style>
      .pop:hover{
        border-top-color: var(--teal) !important;
        transform: scale(1.03 );
        transition: all 0.3s;
      }
      .availability-form{
        margin-top: -50px;
        z-index: 2;
        position:relative;
      }

    @media screen and (max-width: 575px){

      .availability-form{
        margin-top: 25px;
        padding:0 35px;
       }
    }

    .text1 {
        font-size:15px; 
    }
  
    
    </style>
  </head>

  <body class="bg-light">
    
<!--Header-->
  <?php require('inc/header.php'); ?>
    
   <br>
     
           <img src="Photos\Rooms\standard_ph01.jpg" class="w-100 d-block" height="550"/>
         
  
         <!-- check availability -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <form >
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-in</label>
                <input type="date" class="form-control shadow-none">
              </div>

              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500;">Adults</label>
                <select class="form-select shadow-none">
                  <option selected>Select number</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="3">4</option>
                </select>
              </div>

              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500;">Children</label>
                <select class="form-select shadow-none">
                  <option selected>Select number</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="3">4</option>
                </select>
              </div>
                <div class="col-lg-2 mb-lg-3 mt-2">
                  <button type="submit" class="btn text-white shadow-none custom-bg">Book Now</button>
                </div>
            </div>

      </form>
    </div>
  </div>
</div>
 
<br>
<h6 class=" text1 text-left">HOME &nbsp > &nbsp ACCOMODATION &nbsp >&nbsp  STANDARD ROOMS</h6>

   <!--Topics-->
   <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">STANDARD ROOMS</h2>
    <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Celebrate your love story amidst plush greenery and the magic of River's Edge Reception.<br>
      </p>
  </div>

  <br><br>
  
  <!--image grid-->

  <div class="container">
     <div class="row">
      
       <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 ms-5 mb-md-0 mb-3">
          <img src="Photos\Rooms\IMG_5022.jpg" class="img-fluid rounded" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-4 px-md-3 px-0">
         <h5 class="mb-3 mt-1 ms-3">DETAILS</h5> 
         <p class="me-0 ms-3">There is a cosy little dining nook and to make it even better, the room comes with tea and coffee making
             facilities and a mini-fridge that can be updated to a minibar upon request. All rooms and public areas
              have free WiFi for your convenience. 
          The highlight of the room is the outside patio. Completely private, this is the ideal 
          spot to sit back and savour a beverage
           immersed in the nature surrounding after exploring Sigiriya before heading back in to enjoy a rejuvenating rain shower
            in the en-suite luxury bathroom..</p>
            <h6 class="mb-2 ms-3">Maximum occupancy : 3</h6>  
          <h6 class="mb-2 ms-3">No.of.Rooms : 5</h6> 
        </div>   
  </div>
</div>
</div>      

 <br><br><br><br>

 <!--facilities-->
 <h3 class="fm-bold h-font text-center">Facilities</h3>
 <div class="container">
   <div class="row justify-content-evenly px-lg-0 px-md-0 px-2">
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos/Facilities/wifi-logo-svgrepo-com.svg" alt="Wi-Fi" width="40">
      <h6>Wi-Fi</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos/Facilities/hot-water.svg" alt="Hot water" width="40">
      <h6>Hot Water</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\fan-cooling-service-hotel-512.webp" alt="Fans" width="40">
      <h6>Fans</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\electric_kettle-removebg-preview.png" alt="Electric kettle" width="40">
      <h6>Electric kettle</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\lcd-tv-icon-28.jpg" alt="Bed" width="40">
      <h6>Tv</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\24-512.webp" alt="Attached bathroom" width="40">
      <h6>Attached bathroom</h6>
    </div>
   </div>
   <div class="row justify-content-evenly px-lg-0 px-md-0 px-2">
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src= "Photos\Facilities\air_conditioner-512.webp" alt="Air conditioning" width="40">
      <h6>Air conditioning</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\png-transparent-computer-icons-refrigerator-room-refrigerator-television-angle-electronics-thumbnail.png" alt="Mini fridge" width="40">
      <h6>Mini fridge</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\032-512.webp" alt="Hair dryer" width="40">
      <h6>Hair dryer</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\41-512.webp" alt="closet" width="40">
      <h6>Wardrobe or closet </h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\bed.png" alt="Bed" width="40">
      <h6>Bed</h6>
    </div>
   </div>
</div>

<!--Footer-->
  <?php require('inc/footer.php'); ?>

</body>
</html>