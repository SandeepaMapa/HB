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
  <?php require('inc/header.php'); ?>

  <!-- carousel -->
  <div class="container-fluid px-lg mt-4">
    <!-- Swiper -->
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
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

  <!-- check availability -->

  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <form>
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
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size:18px:">FACILITIES</h5>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f1">Facility one</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f2">Facility two</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                  <label class="form-check-label" for="f3">Facility three</label>
                </div>
              </div>
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size:18px:">GUESTS</h5>
                <div class="d-flex">
                  <div class=me-3>
                    <label class="form-label">Adults</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div>
                    <label class="form-label">Children</label>
                    <input type="number" class="form-control shadow-none">
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
 
     function fetch_rooms()
     {
      let xhr = new XMLHttpRequest();
      xhr.open("GET","ajax/rooms.php?fetch_rooms",true);

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

     fetch_rooms();
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