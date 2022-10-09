<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>River's Edge - Accomodation</title>
<?php require('inc/links.php')?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <style>

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

</style>
  
</head>
<body class="bg-light">
    
<!--Header-->
   <?php require('inc/header.php');?>
     
   <!-- carousel -->
  <div class="container-fluid px-lg mt-4">
  <!-- Swiper -->
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="Photos\Restaurant\slide1.jpg" class="w-100 d-block" height="550"/>
          </div>
          <div class="swiper-slide">
            <img src="Photos\Restaurant\slide2.jpg" class="w-100 d-block" height="550"/>
          </div>
          <div class="swiper-slide">
            <img src="Photos\Restaurant\slide3.jpg" class="w-100 d-block" height="550" />
          </div>
        </div>
        
      </div>

</div>

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
                <label class="form-label" style="font-weight: 500;">Dine-in or BBQ</label>
                <select class="form-select shadow-none">
                  <option selected>Selection</option>
                  <option value="Dine-in">dine-in</option>
                  <option value="BBQ">BBQ</option>
      
                </select>
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


     <!--Topics-->
  <div class="my-5 px-4">
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">RESTAURANT</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
  The lake, the temple, the paddy field and the traditional festivities; the soul of every rural village in Sri Lanka is encapsulated in these four elements. At Sigiriya<br>
   Village, we have created a village within a village, providing you with 3 types of dwellings as superior, classic and deluxe. Placed in 6 clusters, there are 120 rooms<br>
    to choose from, every single one built to make your stay as unique and comfortable as possible.
  Each room comes with a unique view of nature,<br> bringing you closer to island living, offering you the best of local 
  and global comforts including free Wi-Fi <br>in rooms and public areas, so that you can sit back and enjoy tropical luxury at its finest.
  </p>
  </div>


   <div class="container">
     <div class="row">

   
      
    
      <div class="card mb-3 border-0 shadow">
       <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
         <img src="Photos\Restaurant\d1.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-4 px-md-3 px-0">
         <h4 class="mb-3">Dine-in</h4>
           <div class="Breakfast mb-3">
                <h6 class="mb-1">Breakfast :- 6AM to 10AM </h6>
                 
            </div>
            <div class="Lunch mb-3">
                <h6 class="mb-1">Lunch   :- 12PM to 3PM</h6>

              </div>
              <div class="Dinner mb-3">
                <h6 class="mb-1">Dinner :- 7PM to 10PM </h6>
                
              </div>
              <div class="capacity mb-3">
                <h6 class="mb-1 badge rounded-pill bg-light text-dark text-wrap">Capacity :- 100 persons</h6>
                 
              </div>
        </div>   
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
          <h6 class="mb-4">Rs. 2500 per person</h6>  
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Reservation</a>
            <a href="StandardRooms.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>

   <!--Rooms-->
<div class="card mb-3 border-0 shadow">
       <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
         <img src="Photos\Restaurant\B1.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-4 px-md-3 px-0">
         <h4 class="mb-3">BBQ</h4>
           <div class="features mb-3">
                <h6 class="mb-1">Open in Friday to Sunday :- 7PM to 10PM</h6>
                
            </div>
            <div class="facilities mb-3">
                <h6 class="mb-1 badge rounded-pill bg-light text-dark text-wrap">Capacity :- 50 persons</h6>
                 
              </div>
              
        </div>   
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
          <h6 class="mb-4">Rs. 1500 per Person</h6>  
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Reservation</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
<div class="card mb-3 border-0 shadow">
       <div class="row g-0 p-3 align-items-center">
        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
         <img src="Photos\Restaurant\t1.jpg" class="img-fluid rounded">
        </div>
        <div class="col-md-5 px-lg-4 px-md-3 px-0">
         <h4 class="mb-3">Takeaway</h4>
           <div class="features mb-3">
                <h6 class="mb-1">We will provide this opportunity soon</h6>
                  
            </div>
           
              
        </div>   
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
         
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Reservation</a>
            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
      </div>


 </div>
</div>


   <?php require('inc/footer.php')?>
   <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
          spaceBetween: 30,
          effect: "fade",
          loop: true,
          autoplay:{
            delay: 3500,
            disableOnInteraction: false,
          }

        });
      </script>

</body>
</html> 