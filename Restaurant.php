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
  <div class="container-fluid px-lg mt-1">
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
  <p class="text-center mx-5 mt-3">
  The culinary experience at River's Edge Hotel is always a delight, with an array of cuisine to choose from!<br>

    At our open air restaurant, you can experience it all, from action cooking to theme nights.
    Choose from menus filled with delicacies perfectly put together by our specialised chefs as you treat your taste buds to the flavours of the world.
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
                <h6 class="mb-1">Breakfast :- 6AM to 11AM </h6>
                 
            </div>
            <div class="Lunch mb-3">
                <h6 class="mb-1">Lunch      :- 12PM to 3PM</h6>

              </div>
              <div class="Dinner mb-3">
                <h6 class="mb-1">Dinner     - 7PM to 10PM </h6>
                
              </div>
              <div class="capacity mb-3">
                <h6 class="mb-1 badge rounded-pill bg-light text-dark text-wrap">Capacity :- 100 Seats</h6>
                 
              </div>
        </div>
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
          <h6 class="mb-4">Rs. 2500 per person</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2" data-bs-toggle="modal" data-bs-target="#Dine-IN-Modal">Reservation</a>
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
                <h6 class="mb-1 badge rounded-pill bg-light text-dark text-wrap">Capacity :- 50 Seats</h6>
                 
              </div>
              
        </div>
        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
          <h6 class="mb-4">Rs. 1500 per Person</h6>
            <a href="DineInnn.php" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Reservation</a>
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
    </div>
      </div>
 </div>
<!-- Reservation Model -->
 <div class="modal fade" id="Dine-IN-Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form id="" >
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
       <!-- Reservation -->
	   <section id="book-a-table" class="book-a-table">
  <div class="container">
 <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
      <div class="row">
        <div class="col-lg-4 col-md-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
          <input type="date" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
          <input type="time" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
          <div class="validate"></div>
        </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
            <select class="form-select"  name="people" id="people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                <option disabled selected >Select One</option>
                <option value="1">Breakfast</option>
                <option value="2">Lunch</option>
                <option value="3">Dinner</option>
                <option value="3">A Lar Carte</option>
              </select>
              <div class="validate"></div>
            </div>
        <div class="col-lg-4 col-md-6 form-group mt-3">
          <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
          <div class="validate"></div>
        </div>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
        <div class="validate"></div>
      </div>
</section><!-- End Book A Table Section -->          
        </div>        
        </form>
      </div>
    </div>
  </div>

<!-- BBQ Reservation Model -->
<div class="modal fade" id="BBQ-Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
									<input class="input" type="date" placeholder="MM/DD/YYYY" id="date">
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

  <!-- Disabling Past Date -->
  <script src="assets/js/main.js"></script>
  <script>
    var date = new Date();
    
    var tdate = date.getDate();
    var month = date.getMonth() +1;
    var year = date.getUTCFullYear() - 0;
    if (month < 10) {
        month = '0' + month
    }
    if (tdate < 10) {
      tdate = '0' + tdate;
    }
    var minDate = year + "-" + month + "-" + tdate; //dte format
    document.getElementById("date").setAttribute("min", minDate);
    console.log(minDate);
</script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
</body>
</html> 