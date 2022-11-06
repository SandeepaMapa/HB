<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>River's Edge - Room Details</title>
  <?php require('inc/links.php') ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


</head>

<body class="bg-light">

  <!--Header-->
  <?php require('inc/header.php'); ?>

  <?php
   if(!isset($_GET['id'])){
    redirect('Accomodation.php');
   }

   $data = filteration($_GET);
   $room_res = select("SELECT * FROM rooms WHERE id=? AND status=? AND removed=?",[$data['id'],1, 0], 'iii');
  
   if(mysqli_num_rows($room_res)==0)
   {
    redirect('Accomodation.php');
   }

   $room_data = mysqli_fetch_assoc($room_res);
  
  ?>
   
   


  <div class="container">
    <div class="row">
        
    <div class="col-12 my-5 mb-4 px-4">
     <h2 class="fw-bold"><?php echo $room_data['name']?></h2>
     <div style="font-size:14px;">
      <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
      <span class="text-secondary"> &nbsp; > &nbsp; </span>
      <a href ="Accomodation.php" class="text-secondary text-decoration-none">ROOMS</a>
     </div>   
  </div>
      
    <div class="col-lg-7 col-md-12 px-4">
      <div id="roomCarousal" class="carousel slide" data-bs-ride="carousel">
       <div class="carousel-inner">

         <?php
               $room_img = ROOMS_IMG_PATH."Villa.jpg";
               $img_q = mysqli_query($con,"SELECT * FROM room_images 
                  WHERE room_id='$room_data[id]'");
       
                 if(mysqli_num_rows($img_q) > 0)
                 {
                   $active_class = 'active';
                   while($img_res = mysqli_fetch_assoc($img_q))
                   {
                    echo"
                     <div class='carousel-item $active_class'>
                       <img src='".ROOMS_IMG_PATH.$img_res['image']."' class='d-block w-100 rounded'>
                     </div>";
                     $active_class='';
                   }
                 }

                 else{
                  echo "<div class='carousel-item active'>
                   <img src='$room_img' class='d-block w-100'>
                   </div>";
                 }
         ?>
    
  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#roomCarousal" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#roomCarousal" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
  </div>


    <div class="col-lg-5 col-md-12 px-4">
      <div class="card mb-3 border-0 shadow-sm rounded-3">
        <div class="card-body">
          <?php
             echo<<<price
             <h4>Rs. $room_data[price] per night</h4>
             price;

             echo<<<rating
               <div class="rating mb-3">
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                </div> 
             rating;

             $fac_q = mysqli_query($con,"SELECT f.name FROM `facilities` f 
                     INNER JOIN room_facilities rfac ON f.id = rfac.facilities_id
                     WHERE rfac.room_id = '$room_data[id]'");
      
                $facilities_data = "";
                while ($fac_row = mysqli_fetch_assoc($fac_q)) {
                  $facilities_data .= "<span class='badge rounded-pill bg-light text-dark text-wrap me-1 mb-1'>
                  $fac_row[name]
              </span>";
      
                }

                echo<<<facilities
                <div class="mb-3">
                    <h6 class="mb-1">Facilities</h6>
                    $facilities_data
                  </div>
                facilities;


                echo<<<guests
                <div class="mb-3">
                      <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                           $room_data[adult] Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                           $room_data[children] Children
                              </span>  
                        </div>
                guests;


                echo<<<book
                <a href="#" class="btn w-100 
                 text-white custom-bg shadow-none mb-1">Book Now</a>
                book;
          ?>
        </div> 
    </div>

      <!--Rooms-->
      <div class="col-12 px-4">


      </div>
    </div>
  </div>


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