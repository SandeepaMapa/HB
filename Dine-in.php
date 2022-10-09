<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - Dine-in</title>
    
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
     
           <img src="Photos\Restaurant\dine-in1.jpg" class="w-100 d-block" height="550"/>
         
  
         

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <form >
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Date</label>
                <input type="date" class="form-control shadow-none">
              </div>

              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500;">Type</label>
                <select class="form-select shadow-none">
                  <option selected>Select</option>
                  <option value="Breakfast">Breakfast</option>
                  <option value="Lunch">Lunch</option>
                  <option value="Dinner">Dinner</option>
                
                </select>
              </div>
             
              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500;">Adults</label>
                <select class="form-select shadow-none">
                  <option selected>Select number</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>

              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500;">Children</label>
                <select class="form-select shadow-none">
                  <option selected>Select number</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
              </div>
                <div class="col-lg-2 mb-lg-3 mt-2">
                  <button type="submit" class="btn text-white shadow-none custom-bg">Reservation</button>
                </div>
            </div>

      </form>
    </div>
  </div>
</div>
 
<br>
<h6 class=" text1 text-left"><a href="index.php" style="text-decoration:none">HOME</a> &nbsp > &nbsp <a href="Restaurant.php" style="text-decoration:none">Restaurant</a> &nbsp > &nbsp Dine-in</h6>


   <!--Topics-->
   <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-3 text-center fw-bold f2">Dine-in</h2>
    <div class="h-line bg-dark"></div>
    
      <p class="text-center mt-3">
   Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Vel non culpa quas est, nisi deserunt explicabo earum hic<br> molestias, nam, voluptate repellendus recusandae.
  Natus vero eaque sit unde sequi illum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Vel non culpa quas est, nisi deserunt explicabo earum hic<br> molestias, nam, voluptate repellendus recusandae.
  Natus vero eaque sit unde sequi illum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Vel non culpa quas est, nisi deserunt explicabo earum hi molestias, nam, voluptate repellendus recusandae.
  Natus vero eaque sit unde sequi illum.
      </p>
  </div>

  <br><br>


  <h4 class="my-3 ms-4 fw-bold h-foot text-right">Breakfast</h4>
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-4 mb-lg-0 ms-4 mb-md-0 mb-3">
    <img src="Photos\Restaurant\dine-in.jpg" class="img-fluid rounded" width=600px height=800px>
    </div>
    <div class="col-md-7 px-lg-5 px-md-3 px-0">
      <div class="card-body">
      <h5 class="my-3 fw-bold h-foot ">DETAILS</h5>
        <p class="card-text">There is a cosy little dining nook and to make it even better, the room comes with tea and coffee making
             facilities and a mini-fridge that can be updated to a minibar upon request. All rooms and public areas have free WiFi for your convenience. 
          The highlight of the room is the outside patio. Completely private, this is the ideal spot to sit back and savour a beverage
           immersed in the nature surrounding after exploring Sigiriya before heading back in to enjoy a rejuvenating rain shower in the en-suite luxury bathroom..</p>
           <h6 class="mb-2 ms-3">open hours :- 6AM to 11PM</h6>  
          <h6 class="mb-2 ms-3">Capacity :- 100 persons</h6> 
          <h6 class="mb-2 ms-3">Rs. 2500 per person</h6> 
      </div>
   
    </div>
  </div>
 <br><br>
<hr>

<br><br>


  <h4 class="my-3 ms-4 fw-bold h-foot text-right">Lunch</h4>
  <div class="row g-0 p-3 align-items-center">
    <div class="col-md-4 mb-lg-0 ms-4 mb-md-0 mb-3">
    <img src="Photos\Restaurant\dine-in2.jpg" class="img-fluid rounded" width=600px height=800px>
    </div>
    <div class="col-md-7 px-lg-5 px-md-3 px-0">
      <div class="card-body">
      <h5 class="my-3 fw-bold h-foot ">DETAILS</h5>
        <p class="card-text">There is a cosy little dining nook and to make it even better, the room comes with tea and coffee making
             facilities and a mini-fridge that can be updated to a minibar upon request. All rooms and public areas have free WiFi for your convenience. 
          The highlight of the room is the outside patio. Completely private, this is the ideal spot to sit back and savour a beverage
           immersed in the nature surrounding after exploring Sigiriya before heading back in to enjoy a rejuvenating rain shower in the en-suite luxury bathroom..</p>
           <h6 class="mb-2 ms-3">open hours :- 12PM to 3PM</h6>  
          <h6 class="mb-2 ms-3">Capacity :- 100 persons</h6> 
          <h6 class="mb-2 ms-3">Rs. 2500 per person</h6> 
      </div>
      </div>
   
    </div>
  </div>

  <hr>
  <br><br>


<h4 class="my-3 ms-4 fw-bold h-foot text-right">Dinner</h4>
<div class="row g-0 p-3 align-items-center">
  <div class="col-md-4 mb-lg-0 ms-4 mb-md-0 mb-3">
  <img src="Photos\Restaurant\dine-in4.jpg" class="img-fluid rounded" width=600px height=800px>
  </div>
  <div class="col-md-7 px-lg-5 px-md-3 px-0">
    <div class="card-body">
    <h5 class="my-3 fw-bold h-foot ">DETAILS</h5>
      <p class="card-text">There is a cosy little dining nook and to make it even better, the room comes with tea and coffee making
           facilities and a mini-fridge that can be updated to a minibar upon request. All rooms and public areas have free WiFi for your convenience. 
        The highlight of the room is the outside patio. Completely private, this is the ideal spot to sit back and savour a beverage
         immersed in the nature surrounding after exploring Sigiriya before heading back in to enjoy a rejuvenating rain shower in the en-suite luxury bathroom..</p>
         <h6 class="mb-2 ms-3">open hours :- 7PM to 10PM</h6>  
          <h6 class="mb-2 ms-3">Capacity :- 100 persons</h6> 
          <h6 class="mb-2 ms-3">Rs.2500 per person</h6> 
    </div>
 
  </div>
</div>
<br><br>

<br>
<br>


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
      <img src="Photos\Facilities\pets.png" alt="Pets are Not Allowed" width="40">
      <h6>Pets are Not Allowed</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\open.png" alt="Open Environment" width="40">
      <h6>Open Environment</h6>
    </div>
    <div class="col-lg-1 col-md-1 text-center bg-white rounded shadow py-3 my-5">
      <img src="Photos\Facilities\kids.png" alt="kids friendly" width="40">
      <h6>Kids friendly</h6>
    </div>
   </div>
   
   </div>
</div>

<!--Footer-->
  <?php require('inc/footer.php'); ?>

</body>
</html>