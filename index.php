<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>River's Edge Home</title>
<?php require('inc/links.php');?>
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
    

<?php require('inc/header.php');?>

  <!-- carousel -->
  <div class="container-fluid px-lg mt-4">
  <!-- Swiper -->
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
        <?php
          $res = selectAll('carousel');
          while($row = mysqli_fetch_assoc($res))
        {
            $path = CAROUSEL_IMG_PATH;
            echo <<<data
              <div class="swiper-slide">
                <img src="$path$row[image]" class="w-100 d-block">
              </div>
            data;
        }
        ?>
      </div>
    </div>
  </div>

<!-- check availability -->

<div class="container availability-form ">
  <div class="row ">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
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
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>

              <div class="col-lg-2 mb-3">
                <label class="form-label" style="font-weight: 500;">Children</label>
                <select class="form-select shadow-none">
                  <option selected>Select number</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
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

<!--Rooms-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">OUR ROOMS</h2>

<div class="container">
  <div class="row">
  
  <?php
        $room_res = select("SELECT * FROM rooms WHERE status=? AND removed=? ORDER BY id DESC LIMIT 3 ", [1, 0], 'ii');

        while ($room_data = mysqli_fetch_assoc($room_res)) {
          //get facilities of room
        
          $fac_q = mysqli_query(
            $con,
            "SELECT f.name FROM `facilities` f 
               INNER JOIN room_facilities rfac ON f.id = rfac.facilities_id
               WHERE rfac.room_id = '$room_data[id]'"
          );


          $facilities_data = "";
          while ($fac_row = mysqli_fetch_assoc($fac_q)) {
            $facilities_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
            $fac_row[name]
        </span>";

          }

          //get thumbnail of image
        
          $room_thumb = ROOMS_IMG_PATH . "thumbnail.png";
          $thumb_q = mysqli_query(
            $con,
            "SELECT * FROM room_images 
           WHERE room_id='$room_data[id]' AND thumb='1'"
          );

          if (mysqli_num_rows($thumb_q) > 0) {
            $thumb_res = mysqli_fetch_assoc($thumb_q);
            $room_thumb = ROOMS_IMG_PATH . $thumb_res['image'];
          }

          $book_btn = "";

          if(!$settings_r['shutdown'])
          {
            $login=0;
            if(isset($_SESSION['login']) && $_SESSION['login']==true )
            {
                $login=1;
            }

           $book_btn = "<button onclick='checkLoginToBook($login,$room_data[id])' class='btn btn-sm text-white custom-bg shadow-none>Book Now</button>";
          }


          //print room card
        
          echo <<<data
          <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
            <img class="card-img-top" src="$room_thumb" alt="Card image cap">
    
            <div class="card-body">
              <h5 class="card-title">$room_data[name]</h5>
              <h6 class="mb-4">Rs. $room_data[price] per night</h6>
                  <div class="facilities mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    $facilities_data
                  </div>
                  <div class="guests mb-1">
                  <h6 class="mb-1">Guests</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        $room_data[adult] Adults
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        $room_data[children] Children
                    </span>  
                </div>
                  <div class="rating mt-3 mb-4">
                    <h6 class="mb-1">Rating</h6>
                   
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                 
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="room_details.php?id=$room_data[id]" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                  </div>
             
            </div>
          </div>
         </div>
            
          
       data;
       }
      ?>
    
    <div class="col-lg-12 text-center mt-5">
      <a href="Accomodation.php" class="button-hall btn-sm btn-outline-dark rounded-0 fw-bold shadow-sm">More Rooms >>></a>
    </div>
  </div>
</div>
<br><br>
<!--End of rooms-->



<!--Facilities-->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">OUR FACILITIES</h2>

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/wifi-logo-svgrepo-com.svg" alt="Wi-Fi" width="100">
      <h5>Wi-Fi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/hot-water.svg" alt="Hot water" width="100">
      <h5>Hot Water</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/swimming-pool-2711.svg" alt="Pool" width="100">
      <h5>Pool</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/bar.svg" alt="Bar" width="70">
      <h5>Bar</h5>
    </div>
  </div>
</div>
<!--End of Facilities-->
<br><br>

<!-- Events -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2"> EVENTS WE CAN TAKE CARE OF</h2>
<div class="container-fluid">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="my-3 " style="max-width: 350px; margin:auto;">
<div class="card bg-dark">
  <img src="Photos\Events\wed2.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="mt-1 pt-4 mb-4 text-center fw-bold f2 shadow-none">Weddings</h5>
   
  </div>
  
</div>

</div>
<div class="my-3 " style="max-width: 350px; margin:auto;">
  <div class="card bg-dark">
    <img src="Photos\Events\dayouts.jpeg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="mt-1 pt-4 mb-4 text-center fw-bold f2 shadow-none">Days out</h5>
     
    </div>
    
  </div>
  
  </div>
  <div class="my-3 " style="max-width: 350px; margin:auto;">
    <div class="card bg-dark">
      <img src="Photos\Events\WhatsApp Image 2022-08-22 at 11.49.47 PM (1).jpeg" class="card-img" alt="...">
      <div class="card-img-overlay">
        <h5 class="mt-1 pt-4 mb-4 text-center fw-bold f2 shadow-none">Parties</h5>
       
      </div>
      
    </div>
    
    </div>
    <div class="my-3 " style="max-width: 350px; margin:auto;">
      <div class="card bg-dark">
        <img src="Photos\Events\photo1.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="mt-1 pt-4 mb-4 text-center fw-bold f2 shadow-none">Photoshoots</h5>
         
        </div>
        
      </div>
      
      </div>
      <div class="col-lg-12 text-center mt-5">
      <a href="Events.php" class="button-hall btn-sm btn-outline-dark rounded-0 fw-bold shadow-sm">View Events >>></a>
    </div>
</div>
</div>
      
<br><br>


<!--Reach Us-->

<?php
$contact_q = "SELECT * FROM contact_details WHERE sr_no=?";
$values = [1];
$contact_r =mysqli_fetch_assoc(select($contact_q,$values,'i'));
?>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">Reach Us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 bg-white rounded"></div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.151117286474!2d80.0630986!3d6.225736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x36b288ccc4774ebc!2sRiver&#39;s%20Edge%20madampe%20Ambalangoda!5e0!3m2!1sen!2slk!4v1665017607784!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="bg_white p-4 mb-lg-0 mb_3 bg_white rounded">
     <h5>Call us</h5>
       <a href="tel:0771324857" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-fill"></i>0771324857
       </a>
       <br>
       <a href="tel:0716388682" class="d-inline-block mb-2 text-decoration-none text-dark">
        <i class="bi bi-telephone-fill"></i>0716388682
       </a>
    </div>
    <div class="bg-white p-4 rounded mb-4">
      <h5>Follow us</h5>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dazrk fs-6 p-2" >
        <i class="bi bi-facebook me-1"></i>facebook
      </span>
      </a>
      <br>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dazrk fs-6 p-2" >
        <i class="bi bi-instagram me-1"></i>Instagram
      </span>
      </a>
      </div>
      </div>
  </div>
</div>

<?php require('inc/footer.php');?>
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