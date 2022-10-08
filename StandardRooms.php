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
<h6 class=" text1 ms-5 text-left">HOME &nbsp > &nbsp ACCOMODATION &nbsp >&nbsp  STANDARD ROOMS</h6>

   <!--Topics-->
   <div class="my-5 px-4">
    <h2 class="fm-bold h-font text-center">Standard Rooms</h2>
    <div class="h-line bg-dark"></div>
      <p class="text-center mt-3">
        Celebrate your love story amidst plush greenery and the magic of River's Edge Reception.<br>
      </p>
  </div>

  <!--image grid-->
   <div class="container">
     <div class="row">
       <div class="col-sm-3">
            <img src="Photos/Demo/R1.jpeg">
        </div>
     <div class="col-sm-9">
       <div class="row">
         <div class="col-8 col-sm-6">
           Level 2: .col-8 .col-sm-6
         </div>
          <div class="col-4 col-sm-6">
           Level 2: .col-4 .col-sm-6
         </div>
       </div>
     </div>
   </div>
 </div>
  

<!--Footer-->
  <?php require('inc/footer.php'); ?>

</body>
</html>