<link rel="icon" href="Photos\sitelogo-removebg-preview.png" type="image/icon type">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php

session_start();
data_default_timezone_set("asia/colombo");


require('admin/inc/db_config.php');
require('admin/inc/essenials.php');

Settings_q = "SELECT * FROM 'setting' WHERE 'sr-no'=?";
$values = [1];
$setting-r = mysqli_fetch-assoc(Settings_q,$values,'i');

if($settings_r['shutdown']){
    echo<<<alterbar
    <div clas='bg-danger text-center p-2 fw-bold'>
    <i class="bi bi-exclamation-triangle-fill"></i>
    Bookings are temporarily closed!
    alterbar;
}





?>