<!--Footer-->
<footer class="footer">
<div class="container-fluid1 mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="f2 fw-bold fs-3 mb-2 text-white">River's Edge</h3>
      <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Atque recusandae, porro velit est dolore earum neque aperiam eveniet, 
        quisquam eaque quibusdam quia cum quam itaque pariatur, 
        molestias fugiat magnam ratione!</p>
    </div>
    <div class="col-lg-4 p-4 text-white">
      <h5 class="mb-3 text-white">Quick Links</h5>
      <a href="Accomodation.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Accommodation</a><br>
      <a href="Restaurant.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Restaurant</a><br>
      <a href="Events.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Events</a><br>
      <a href="Gallery.php" class= " text-white d-inline-block mb-2 text-dark text-decoration-none">Gallery</a><br>
      <a href="contact.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Contact</a><br>
      <a href="About Us.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">About us</a><br>
    </div>
    <div class="col-lg-4 p-4 text-white">
      <h5 class=" text-white mb-3">Follow us</h5>

      <?php
        if($contact_r['tw']!='')
        {
          echo<<<data
          <a href="$contact_r[tw]" class="text-white d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-twitter me-1 "></i> Twitter
          </a><br>
          data;
        }
      ?>

      
      <a href="<?php echo $contact_r['insta'] ?>" class=" text-white d-inline-block text-dark text-decoration-none mb-2">
        <i class="bi bi-instagram me-1 "></i> Instagram
    </a><br>
    <a href="<?php echo $contact_r['fb'] ?>" class=" text-white d-inline-block text-dark text-decoration-none mb-2">
      <i class="bi bi-facebook me-1 "></i> Facebook
  </a><br>
</div>
  </div>
</div>
</footer>
<h6 class="text-center bg-dark text-white p-3 m-0">Group 14</h6>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 
  <script>
    function setActive()
    {
      let navbar = document.getElementById('dashboard-menu');
      let a_tags = navbar.getElementsByTagName('a');

      for(i=0; i<a_tags.length; i++)
      {
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if(document.location.href.indexOf(file_name) >= 0)
        {
          a_tags[i].classList.add('active');
        }

      }
    }
    setActive();
  </script>
