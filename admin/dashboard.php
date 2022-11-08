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
        
    <?php 
    require('inc/header.php');

    $current_booking = mysqli_fetch_assoc(mysqli_query($con,"SELECT
    COUNT(CASE WHEN booking_status='booked' AND arrival=0 THEN 1 END) AS 'new_bookings',
    COUNT(CASE WHEN booking_status='cancelled' AND Rrfund=0 THEN 1 END) AS 'refund_bookings'
   FROM 'bookings'"));

   $unread_queries = mysqli_fetch_assoc(mysqli_query($con,"SELECT COUNT(sr_no) AS 'COUNT'
    FROM 'user queries' WHERE 'seen'=0"));

    ?>    

       
       <div class="container-fluid"  id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">

            <div class="d-flex align-items-center justify-content-between mb-4">
        <h3>DASHBOARD</h3>
     </div>

     <div class="row mb-4">
        <div class="col-md-3 mb-4">
            <a href="booknow.php" class="text-decoration-none">
                <div class="card text-center text-success p-3">
                <h6>Bookings</h6>
                <h1 class="mt-2 mb-0"><?php echo $current_bookings['new_bookings']?></h1>
            </div>
    </a>
</div>

<div class="col-md-3 mb-4">
            <a href="booknow.php" class="text-decoration-none">
                <div class="card text-center text-warning p-3">
                <h6>Refund Bookings</h6>
                <h1 class="mt-2 mb-0">5</h1>
            </div>
    </a>
</div>

<div class="col-md-3 mb-4">
            <a href="user_queries.php" class="text-decoration-none">
                <div class="card text-center text-info p-3">
                <h6>User Queries</h6>
                <h1 class="mt-2 mb-0">5</h1>
            </div>
    </a>
</div>


<div class="d-flex align-items-center justify-content-between mb-3">
        <h5>Booking Analytics</h5>
        <select class="form-select shadow-none bg-light w-auto">
            <option value="1">Past 30 Days</option>
            <option value="2">twPast 90 Days</option>
            <option value="3">Past 1 Year</option>
            <option value="4">All time</option>
            
</select>
     </div>



     <div class="row mb-3">
     <div class="col-md-3 mb-3">
                <div class="card text-center text-primary p-3">
                <h6>Total Bookings</h6>
                <h1 class="mt-2 mb-0">0</h1>
                <h4 class="mt-2 mb-0">Rs.0</h4>
            </div>
</div>
    

<div class="col-md-3 mb-3">
                <div class="card text-center text-success p-3">
                <h6>Actiive Bookings</h6>
                <h1 class="mt-2 mb-0">0</h1>
                <h4 class="mt-2 mb-0">Rs.0</h4>
            </div>
</div>
    

    <div class="col-md-3 mb-3">
                <div class="card text-center text-primary p-3">
                <h6>Cancelled Bookings</h6>
                <h1 class="mt-2 mb-0">0</h1>
                <h4 class="mt-2 mb-0">Rs.0</h4>
            </div>
</div>
   

</div>

<div class="d-flex align-items-center justify-content-between mb-3">
        <h5>User,Queries and Review Analytics</h5>
        <select class="form-select shadow-none bg-light w-auto">
            <option value="1">Past 30 Days</option>
            <option value="2">twPast 90 Days</option>
            <option value="3">Past 1 Year</option>
            <option value="4">All time</option>
            
</select>
     </div>


     <div class="row mb-3">
     <div class="col-md-3 mb-3">
                <div class="card text-center text-success p-3">
                <h6>New Registration</h6>
                <h1 class="mt-2 mb-0">0</h1>
            </div>
</div>
    

<div class="col-md-3 mb-3">
                <div class="card text-center text-primary p-3">
                <h6>Queries</h6>
                <h1 class="mt-2 mb-0">0</h1>
                
            </div>
</div>
    

    <div class="col-md-3 mb-3">
                <div class="card text-center text-primary p-3">
                <h6>Reviews</h6>
                <h1 class="mt-2 mb-0">0</h1>
            
            </div>
</div>
</div>


<h5>Users</h5>

<div class="row mb-3">
     <div class="col-md-3 mb-3">
                <div class="card text-center text-info p-3">
                <h6>Total </h6>
                <h1 class="mt-2 mb-0">0</h1>
            </div>
</div>
    

<div class="col-md-3 mb-3">
                <div class="card text-center text-success p-3">
                <h6>Active  </h6>
                <h1 class="mt-2 mb-0">0</h1>
                
            </div>
</div>
    

    <div class="col-md-3 mb-3">
                <div class="card text-center text-warning p-3">
                <h6>Intactive</h6>
                <h1 class="mt-2 mb-0">0</h1>
            
            </div>
</div>

<div class="col-md-3 mb-3">
                <div class="card text-center text-danger p-3">
                <h6>Unverified</h6>
                <h1 class="mt-2 mb-0">0</h1>
            
            </div>
</div>

</div>


</div>
</div>
</div>

        <?php require('inc/scripts.php'); ?>
    </body>
</html>