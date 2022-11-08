<?php
    require('inc/essentials.php');
    adminLogin();
    ?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Dashboard</title>
        <?php require('inc/links.php'); ?>
    </head>

    <body class="bg-light">
        
    <?php require('inc/header.php') ?>    

       
       <div class="container-fluid"  id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

            <div class="d-flex align-items-center justify-content-between mb-4">
        <h3>DASHBOARD</h3>
     </div>

     <div class="row mb-4">
        <div class="col-md-3 mb-4">
            <a href="booknow.php" class="text-decoration-none">
                <div class="card text-center text-succe p-3">
                <h6>Bookings</h6>
                <h1 class="mt-2 mb-0">5</h1>
            </div>
    </a>
</div>
</div>

</div>
</div>
</div>

        <?php require('inc/scripts.php'); ?>
    </body>
</html>