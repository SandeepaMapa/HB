<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>River's Edge-Accomodation</title>
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
    

    <?php require('inc/header.php');?>

   <div class="my-5 px-4">
     <h2 class="fw-bold h-font text-center">ACCOMODATION</h2>
     <div class="h-line bg-dark"></div>
   </div>






<?php require('inc/footer.php')?>



  
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