<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>River's Edge - Accomodation</title>
  <?php require('inc/links.php') ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  
  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {

      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }

    }
  </style>

</head>

<body class="bg-light">

  <!--Header-->
  <?php require('inc/header.php'); 
  
   $checkin_default="";
   $checkout_default="";
   $adult_default="";
   $children_default="";

   if(isset($_GET['check_availability']))
   {
     $frm_data = filteration($_GET);

     $checkin_default = $frm_data['checkin'];
     $checkout_default = $frm_data['checkout'];
     $adult_default = $frm_data['adult'];
     $children_default = $frm_data['children'];
   }
  ?>

  <!-- carousel -->
  <div class="container-fluid px-lg mt-4">
    <!-- Swiper -->
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
      <div class="container">
          <div class="carousel-caption text-start">
            <h4>Come, stay and enjoy your day.</h4>
            <h4><a class="btn btn-lg p-3 btn-primary" href="Booknow.php">Book Now</a></h4>
          </div>
        </div>
        <div class="swiper-slide">
          <img src="Photos\Rooms\ch.png" class="w-100 d-block" height="550" />
        </div>
        <div class="swiper-slide">
          <img src="Photos\Rooms\CWY-Beach-Chalet-1090X610.jpg" class="w-100 d-block" height="550" />
        </div>
        <div class="swiper-slide">
          <img src="Photos\Rooms\Villa.jpg" class="w-100 d-block" height="550" />
        </div>
      </div>

    </div>

  </div>


  <!--Topics-->
  <div class="my-5 px-4">
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">ACCOMODATION</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      The lake, the temple, the paddy field and the traditional festivities; the soul of every rural village in Sri
      Lanka is encapsulated in these four elements. At Sigiriya<br>
      Village, we have created a village within a village, providing you with 3 types of dwellings as superior, classic
      and deluxe. Placed in 6 clusters, there are 120 rooms<br>
      to choose from, every single one built to make your stay as unique and comfortable as possible.
      Each room comes with a unique view of nature,<br> bringing you closer to island living, offering you the best of
      local
      and global comforts including free Wi-Fi <br>in rooms and public areas, so that you can sit back and enjoy
      tropical luxury at its finest.
    </p>
  </div>


  <div class="container-fluid">
    <div class="row">

      <!--Filter-->
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ps-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
             
            <!-- check availability-->  
             <div class="border bg-light p-3 rounded mb-3">
                <h5 class="d-flex align-items-center justify-content-between mb-3" style="font-size:18px;">
                <span>CHECK AVAILABILITY</span>
                <button id="chk_avail_btn" onclick="chk_avail_clear()" class="btn shadow-none btn-sm text-secondary d-none">Reset</span>
                </h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3" value="<?php echo $checkin_default ?>" id="checkin" onchange="chk_avail_filter()">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none" value="<?php echo $checkout_default ?>" id="checkout" onchange="chk_avail_filter()">
              </div>

              <!--facilities-->
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="d-flex align-items-center justify-content-between mb-3" style="font-size:18px;">
                 <span>FACILITIES</span>
                  <button id="facilities_btn" onclick="facilities_clear()" class="btn shadow-none btn-sm text-secondary d-none">Reset</span>
                </h5>

                  <?php
                       $facilities_q = selectAll('facilities');
                       while($row = mysqli_fetch_assoc($facilities_q))
                       {
                         echo<<<facilities
                           <div class="mb-2">
                             <input type="checkbox" onclick="fetch_rooms()" name="facilities" value="$row[id]" class="form-check-input shadow-none me-1" id="$row[id]">
                              <label class="form-check-label" for="$row[id]">$row[name]</label>
                           </div>
                         facilities;
                       }
                  ?>
              </div>

              <!--guests-->
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="d-flex align-items-center justify-content-between mb-3" style="font-size:18px;">
                <span>GUESTS</span>
                <button id="guests_btn" onclick="guests_clear()" class="btn shadow-none btn-sm text-secondary d-none">Reset</span>
                </h5>
                <div class="d-flex">
                  <div class=me-3>
                    <label class="form-label">Adults</label>
                    <input type="number" min="1" id="adults" value="<?php echo $adult_default ?>" oninput="guests_filter()" class="form-control shadow-none">
                  </div>
                  <div>
                    <label class="form-label">Children</label>
                    <input type="number"  id="children" value="<?php echo $children_default ?>" oninput="guests_filter()" class="form-control shadow-none">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </nav>
      </div>
      
      <!--Rooms-->
      <div class="col-lg-9 col-md-12 px-4" id="rooms-data">
        
      </div>
    </div>
  </div>

  <script>
    
    let rooms_data = document.getElementById('rooms-data');

    let checkin = document.getElementById('checkin');
    let checkout = document.getElementById('checkout');
    let chk_avail_btn = document.getElementById('chk_avail_btn');

    let adults = document.getElementById('adults');
    let children = document.getElementById('children');
    let facilities_btn = document.getElementById('facilities_btn');

    
     function fetch_rooms()
     {
      let chk_avail = JSON.stringify({
        checkin: checkin.value,
        checkout: checkout.value
      });

      let guests = JSON.stringify({
        adults: adults.value,
        children: children.value
      });

      let facility_list = {"facilities":[]};

      let get_facilities = document.querySelectorAll('[name="facilities"]:checked');
      if(get_facilities.length>0)
      {
        get_facilities.forEach((facility)=>{
          facility_list.facilities.push(facility.value);
        })
        facilities_btn.classList.remove('d-none');
      }
      else{
        facilities_btn.classList.add('d-none');
      }

      facility_list = JSON.stringify(facility_list);


      let xhr = new XMLHttpRequest();
      xhr.open("GET","ajax/rooms.php?fetch_rooms&chk_avail="+chk_avail+"&guests="+guests+"&facility_list="+facility_list,true);

      xhr.onprogress = function(){
        rooms_data.innerHTML = 
        '<div class="spinner-border text-info mb-3 d-block mx-auto" id="loader" role="status">'
          '<span class="visually-hidden">Loading...</span>'
        '</div>';
      }

      xhr.onload = function(){
        rooms_data.innerHTML = this.responseText;
      }
      xhr.send();
     }

     
     function chk_avail_filter()
     {
      if(checkin.value!='' && checkout.value!=''){
        fetch_rooms();
        chk_avail_btn.classList.remove('d-none');
      }
     }

     function chk_avail_clear()
     {
      checkin.value='';
      checkout.value='';
      chk_avail_btn.classList.add('d-none');
        fetch_rooms();
        
      }

      function guests_filter()
      {
        if(adults.value>0 || children.value>0){
          fetch_rooms();
          guests_btn.classList.remove('d-none');
        }
      }

      function guests_clear()
      {
         adults.value='';         
         children.value='';
         guests_btn.classList.remove('d-none');
          fetch_rooms();
          
      }

      function facilities_clear()
      {
        let get_facilities = document.querySelectorAll('[name="facilities"]:checked');
        get_facilities.forEach((facility)=>{
          facility.checked=false;
        });
        facilities_btn.classList.add('d-none');
          fetch_rooms();
          
      }

      window.onload = function()
      {
        fetch_rooms();
      }
     
     
  </script>





  <?php require('inc/footer.php') ?>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });



  </script>

</body>

</html>