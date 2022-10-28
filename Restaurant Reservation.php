<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>River's Edge - Restaurant Reservation</title>
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
  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700%7CCabin:400%7CDancing+Script" rel="stylesheet">

<!-- Bootstrap -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

<!-- Font Awesome Icon -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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

		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
</body>
</html> 