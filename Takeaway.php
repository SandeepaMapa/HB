<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>River's Edge - Takeaway</title>
    
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
     
           <img src="Photos\Restaurant\takeaway.jpg" class="w-100 d-block" height="550"/>
         
  
         <!-- check availability -->

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
                  <button type="submit" class="btn text-white shadow-none custom-bg">Reservation</button>
                </div>
            </div>

      </form>
    </div>
  </div>
</div>
 
<br>
<h6 class=" text1 text-left"><a href="index.php" style="text-decoration:none">HOME</a> &nbsp > &nbsp <a href="Restaurant.php" style="text-decoration:none">Restaurant</a> &nbsp > &nbsp Takeaway</h6>

   <!--Topics-->
   <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">Takeaway</h2>
    <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
      We will provide this opportunity soon
      </p>
  </div>

  
  <!--image grid-->

  <div class="container">
     <div class="row">
      
       <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 ms-5 mb-md-0 mb-3">
          <img src="Photos\Restaurant\takeaway1.jpg" class="img-fluid rounded" class="img-fluid rounded">
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
          <h6 class="mb-2 ms-3">We will provide this opportunity soon</h6>  
        
        </div>   
  </div>
</div>
</div>      

 <br><br><br><br>

 
 
<!--Footer-->
  <?php require('inc/footer.php'); ?>

</body>
</html>