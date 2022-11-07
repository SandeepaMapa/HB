
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>River's Edge Home-Contact</title>
<link rel="stylesheet" href="https://unpkg.com/sswiper@7/swiper-bundle.min.css">
<?php require('inc/links.php'); ?>

 


</head>
<body class="bg-light">

<?php require('inc/Header.php'); ?>

<div class=" px-4">
<h2 class=" pt-4 mb-4 text-center fw-bold f2">CONTACT</h2>
<div class="h-line bg-dark"></div>
<p class= "text-center mt-3">
Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Vel non culpa quas est, nisi deserunt explicabo earum hic<br> molestias, nam, voluptate repellendus recusandae.
  Natus vero eaque sit unde sequi illum.
</p>
</div>
<br><br>

<div class="row">
  <div class="col-lg-6 col-md-6 mb-5 px-4">

    <div class="bg-white rounded shadow p-4 ">
    <iframe  class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2877793556518!2d80.06090991455486!3d6.225735995493318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae183766f634c57%3A0x36b288ccc4774ebc!2sRiver&#39;s%20Edge%20madampe%20Ambalangoda!5e0!3m2!1sen!2slk!4v1667833542352!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
      <h5>Address</h5>
      <a href="" target="-blank" class="d-inline-block text-decration-none text-dark mb-2">
      <i class="bi bi-geo-alt-fill"></i>River's Edge, madampe, Ambalangoda 80300
      </a>

     <h5 class="mt-4">Call us </h5>
     <a href="" class="d-inline-block mb-2 text-decoration-none text-dark">
      <i class="bi bi-telephone-fill"></i> 0779306430<br>
      <i class="bi bi-telephone-fill"></i> 0736004056
    </a>
    <br>

    <h5 class="mt-4">Email</h5>
    <a href="mailto:River'sedge@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
    <i class="bi bi-envelope-fill"> </i>Riversedge@gmail.com
  </a>
  <h5 class="mt-4">Follow us</h5>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-1" >
        <i class="bi bi-facebook me-1"></i>facebook
      </span>
      </a>
      <br>
      <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-1" >
        <i class="bi bi-instagram me-1"></i>Instagram
      </span>
      </a>
</div>
</div>
<div class="col-lg-6 col-md-6  px-4">
    <div class="bg-white rounded shadow p-4 ">
      <form method="POST">
        <h5> Send a Message </h5>
        <div class=" mt-3">
          <label  class="form-label" style="font-weight: 500;">Name</label>
        <input name="name" required type="text" class="form-control shadow-none">
           </div>

           <div class=" mt-3">
          <label  class="form-label" style="font-weight: 500;">Email</label>
        <input name="email" required type="email" class="form-control shadow-none">
           </div>

           <div class=" mt-3">
          <label  class="form-label" style="font-weight: 500;">Subject</label>
        <input name="subject" required type="text" class="form-control shadow-none">
           </div>

           <div class=" mt-3">
          <label  class="form-label" style="font-weight: 500;">Message</label>
        <textarea name="message" required  class ="form-control shadow-none" rows="5" style="resize:none;"></textarea>
           </div>
           <button type="submit" name="send"  class="btn text-white custom-bg mt-3">SEND</button>
      </form>
</div>
</div>
</div>

<?php

   if(isset($_POST['send']))
   {
     $frm_data = filteration($_POST);

     $q = "INSERT INTO user_queries(name, email, subject, message) VALUES (?,?,?,?)";
     $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];

     $res = insert($q,$values,'ssss');
     if($res==1)
     {
      alert('success','Mail sent');
     }
     else{
      alert('error','Server Down Try again Later');
     }
   }



?>




<?php require('inc/footer.php'); ?>


</body>
</html> 