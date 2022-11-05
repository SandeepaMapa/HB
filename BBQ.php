<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - BBQ</title>
    
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
    

     
           <img src="Photos\Restaurant\BBQ.jpg" class="w-100 d-block" height="550"/>
         
 
<br>
<h6 class=" text1 text-left"><a href="index.php" style="text-decoration:none">HOME</a> &nbsp > &nbsp <a href="Restaurant.php" style="text-decoration:none">Restaurant</a> &nbsp > &nbsp BBQ</h6>

   <!--Topics-->
   <div class="px-4">
    <h2 class="pt-4 mb-3 text-center fw-bold f2">BBQ</h2>
    <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Celebrate your love story amidst plush greenery and the magic of River's Edge Reception. Celebrate your love 
        story amidst plush greenery and the magic of River's Edge Reception.<br> Celebrate your love story amidst plush greenery 
        nd the magic of River's Edge Reception.Celebrate your love story amidst plush greenery and the magic of River's Edge Reception.
      </p>
  </div>

  
  <!--image grid-->

  <div class="container">
     <div class="row">
      
       <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 ms-5 mb-md-0 mb-3">
          <img src="Photos\Restaurant\BBQ 11.jpg" class="img-fluid rounded" class="img-fluid rounded">
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
          <h6 class="mb-2 ms-3">Open in Friday to Sunday :- 7PM to 10PM</h6>  
          <h6 class="mb-2 ms-3">Capacity :- 50 persons</h6> 
          <h6 class="mb-2 ms-3">Rs. 1500 per person</h6> 
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
      <img src="Photos\Facilities\parking.png" alt="Parking" width="40">
      <h6>Parking</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\self service.png" alt="Self-Service" width="40">
      <h6>Self-Service</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\Open.png" alt="Out Door" width="40">
      <h6>Outdoor</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\kids.png" alt="kid friendly" width="40">
      <h6>Kid friendly</h6>
    </div>
   </div>
   
   </div>
   
   </div>
</div>
<!--Footer-->
  <?php require('inc/footer.php'); ?>

</body>
</html>