<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>River's Edge - Restaurant</title>
<?php require('inc/links.php')?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  
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


     <!--Topics-->
  <div class="my-3 px-4">
  <h2 class="mt-3 pt-4 mb-4 text-center fw-bold f2">RESTAURANT</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-4">
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
            <a href="Restaurant Reservation.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" data-bs-toggle="modal" data-bs-target="#Dine-IN-Modal">Reservation</a>
            <a href="Dine-in.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>

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
            <a href="BBQ.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
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
            <a href="Takeaway.php" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
    </div>
  </div>
</div>
      </div>


 </div>

 <div class="modal fade" id="Dine-IN-Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form id="" >
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
       <!-- Reservation -->
		<div id="reservation" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- reservation form -->
                    <div class="card mb-3 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
					<div class="col-md-6 col-md-offset-1 col-sm-10 col-sm-offset-1">
						<form class="reserve-form row">
							<div class="section-header text-center">
								<h4 class="sub-title">Reservation</h4>
								<h2 class="title white-text">Book Your Table</h2>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Name:</label>
									<input class="input" type="text" placeholder="Name" id="name">
								</div>
								<div class="form-group">
									<label for="phone">Phone:</label>
									<input class="input" type="tel" placeholder="Phone" id="phone">
								</div>
								<div class="form-group">
									<label for="date">Date:</label>
									<input class="input" type="text" placeholder="MM/DD/YYYY" id="date">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="email">Email:</label>
									<input class="input" type="email" placeholder="Email" id="email">
								</div>
								<div class="form-group">
									<label for="number">Number of Guests:</label>
									<select class="input" id="number">
										<option>1 Person</option>
										<option>2 People</option>
										<option>3 People</option>
										<option>4 People</option>
										<option>5 People</option>
										<option>6 People</option>
									</select>
								</div>
								<div class="form-group">
								  <label for="time">Time:</label>
								  <input class="input" type="text" placeholder="HH:MM" id="time">
								</div>
							</div>

							<div class="col-md-12 text-center">
								<button class="main-button">Book Now</button>
							</div>

						</form>
					</div>
                    
					<!-- /reservation form -->

					<!-- opening time -->
					<div class="col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1">
						<div class="opening-time row">
							<div class="section-header text-center">
								<h2 class="title white-text">Opening Time</h2>
							</div>
							<ul>
								<li>
									<h4 class="day">Sunday</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Monday</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Tuesday</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Wednesday</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Thursday</h4>
									<h4 class="hours">8:00 am – 11:00 pm</h4>
								</li>
								<li>
									<h4 class="day">Friday</h4>
									<h4 class="hours">Closed</h4>
								</li>
								<li>
									<h4 class="day">Saturday</h4>
									<h4 class="hours">Closed</h4>
								</li>
							</ul>
						</div>
					</div>
					<!-- /opening time -->
                    </div>
                    </div>
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Reservation -->
      
      
          
        </div>
        
        </form>

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