<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>River's Edge Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    

    <nav class="navbar navbar-expand-lg navbar-light bg-primary px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand f2" href="#">River's Edge</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Accommodation
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Standard Rooms</a></li>
            <li><a class="dropdown-item" href="#">Villa</a></li>
             <li><a class="dropdown-item" href="#">Challet</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Restaurant
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Take Away</a></li>
            <li><a class="dropdown-item" href="#">Dine-in</a></li>
             <li><a class="dropdown-item" href="#">BBQ</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active me-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Events
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Wedding</a></li>
            <li><a class="dropdown-item" href="#">Parties</a></li>
            <li><a class="dropdown-item" href="#">Meeting</a></li>
            <li><a class="dropdown-item" href="#">Day Out</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Activities</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="#">Gallery</a>
        </li>
</ul>
      
        <div class="d-flex">
         
          
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 " data-bs-toggle="modal" data-bs-target="#loginModal">
  Login
</button>
<button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
  Register
</button>
</div>
    </div>
  </div>
</nav>

<!-- Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>
          User Login</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
        <label  class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none">
         
      </div>

      <div class="mb-4 ">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control shadow-none">
      </div> 

      <div class="d-flex align-items-center justify-content-between mb-2">
        <button type="submit" class="btn btn-dark shadow-none">LOGIN  </button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
      </div>
          
        </div>
        
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
          <i class="bi bi-person-lines-fill fs-3 me-2"></i>
          User Registration</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
          Important: Your details must match with your ID (NIC, Passport) details.
       </span>
       <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Name</label>
        <input type="text" class="form-control shadow-none">
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">NIC Number</label>
        <input type="text" class="form-control shadow-none">
          </div>
        <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Email</label>
        <input type="email" class="form-control shadow-none">
           </div>
           <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Phone Number</label>
        <input type="number" class="form-control shadow-none">
          </div>
        <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Password</label>
        <input type="password" class="form-control shadow-none">
           </div>
           <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Confirm Password</label>
        <input type="password" class="form-control shadow-none">
           </div>
           <div class="text-center my-1 mb-1">
            <button type="submit" class="btn btn-dark shadow-none">Register</button>
           </div>
          </div>
        </div>
      
      
          
        </div>
        
        </form>
      </div>
    </div>
  </div>



  <!-- carousel -->
  <div class="container-fluid px-lg mt-4">
  <!-- Swiper -->
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="photos/Demo/colombo_2.jpg" class="w-100 d-block" height="450"/>
          </div>
          <div class="swiper-slide">
            <img src="photos/Demo/df09c33940de39df187b3eda0d20d386.jpg" class="w-100 d-block" height="450"/>
          </div>
          <div class="swiper-slide">
            <img src="photos/Demo/digital-marketing-for-hotels.jpg" class="w-100 d-block" height="450" />
          </div>
          <div class="swiper-slide">
            <img src="photos/Demo/modd.png"  class="w-100 d-block" height="450" />
          </div>
        </div>
        
      </div>

</div>

<!-- check availability -->

<div class="container availability-form">
  <div class="row">
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
              <div class="col-lg-3 mb-3">
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
                <div class="col-lg-1 mb-lg-3 mt-2">
                  <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                </div>
            </div>

      </form>
    </div>
  </div>
</div>

<!--Rooms-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">Our Rooms</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
        <img class="card-img-top" src="Photos/Demo/R1.jpeg" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Standard Room</h5>
          <h6 class="mb-4">Rs. 8000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Room
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Double-bed
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Sofa
                </span>
              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Free Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Hot water
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Mini-bar
                </span>
              </div>
            
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
               
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
             
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
         
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
        <img class="card-img-top" src="Photos/Rooms/Villa.jpg" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Villa</h5>
          <h6 class="mb-4">Rs. 18000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Room
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Double-bed
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Sofa
                </span>
              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Free Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Hot water
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Mini-bar
                </span>
              </div>
            
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
               
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
             
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
         
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">

      <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
        <img class="card-img-top" src="Photos/Demo/R1.jpeg" alt="Card image cap">

        <div class="card-body">
          <h5 class="card-title">Challet</h5>
          <h6 class="mb-4">Rs. 15000 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Room
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Bathroom
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      1 Double-bed
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Sofa
                </span>
              </div>

              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Free Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Hot water
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Mini-bar
                </span>
              </div>
            
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
               
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
             
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
         
        </div>
      </div>
    </div>


    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-sm">More Rooms >>></a>
    </div>
  </div>
</div>
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

<!-- Events -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold ">Events we can take care of</h2>
<div class="container-fluid">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="my-3 " style="max-width: 350px; margin:auto;">
<div class="card bg-dark">
  <img src="Photos/Events/wedding-ceremony-ideas-beach-wedding-ceremony.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="mt-1 pt-4 mb-4 text-center fw-bold f2 shadow-none">Weddings</h5>
   
  </div>
  
</div>

</div>
<div class="my-3 " style="max-width: 350px; margin:auto;">
  <div class="card bg-dark">
    <img src="Photos/Events/wedding-ceremony-ideas-beach-wedding-ceremony.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">
      <h5 class="mt-1 pt-4 mb-4 text-center fw-bold f2 shadow-none">Days out</h5>
     
    </div>
    
  </div>
  
  </div>
  <div class="my-3 " style="max-width: 350px; margin:auto;">
    <div class="card bg-dark">
      <img src="Photos/Events/wedding-ceremony-ideas-beach-wedding-ceremony.jpg" class="card-img" alt="...">
      <div class="card-img-overlay">
        <h5 class="mt-1 pt-4 mb-4 text-center fw-bold f2 shadow-none">Parties</h5>
       
      </div>
      
    </div>
    
    </div>
    <div class="my-3 " style="max-width: 350px; margin:auto;">
      <div class="card bg-dark">
        <img src="Photos/Events/wedding-ceremony-ideas-beach-wedding-ceremony.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="mt-1 pt-4 mb-4 text-center fw-bold f2 shadow-none">Meetings</h5>
         
        </div>
        
      </div>
      
      </div>
</div>
</div>

<!--Reach Us-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold f2">Reach Us</h2>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 bg-white rounded"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.151117286474!2d80.0630986!3d6.225736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x36b288ccc4774ebc!2sRiver&#39;s%20Edge%20madampe%20Ambalangoda!5e0!3m2!1sen!2slk!4v1665017607784!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<!--Footer-->

<div class="container-fluid bg-primary mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="f2 fw-bold fs-3 mb-2">River's Edge</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Atque recusandae, porro velit est dolore earum neque aperiam eveniet, 
        quisquam eaque quibusdam quia cum quam itaque pariatur, 
        molestias fugiat magnam ratione!</p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Quick Links</h5>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Accommodation</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Events</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Activities</a><br>
      <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Gallery</a><br>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter me-1 "></i> Twitter
      </a><br>
      <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-instagram me-1 "></i> Instagram
    </a><br>
    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
      <i class="bi bi-facebook me-1 "></i> Facebook
  </a><br>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Group 14</h6>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

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