<?php
 require('inc/essentials.php');
 require('inc/db_config.php');
 adminLogin();

 if(isset($_GET['checked_in']))
 {
    $frm_data = filteration($_GET);

   $sq = "UPDATE bookings SET checked_in=? WHERE booking_id=?";
   $values = [1,$frm_data['checked_in']];
   if(update($sq,$values,'ii')){
    alert('Success','Marked as read!');
   }
   else{
    alert('error','Operation Failed!');
   }
 }


if(isset($_GET['del']))
 {
    $frm_data = filteration($_GET);
   $sq = "DELETE FROM bookings WHERE booking_id=?";
   $values = [$frm_data['del']];
   if(delete($sq,$values,'i')){
    alert('Success','Data deleted!');
   }
   else{
    alert('error','Operation Failed!');
   }
 }



?>

 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel -User_queries</title>
        <?php require('inc/links.php'); ?>
    </head>
    <body class="bg-light"> 

    <?php require('inc/header.php') ?>    

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">BOOKINGS</h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
        
                    <div class="text-end mb-4">
                    <div class="table-responsive-md" style="height:500px; overflow-y: scroll;">
                    <table class="table table-hover border">
                    <thead class="stick-top">
                    <tr class="bg-dark text-light">
                    <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Room Type</th>
                                <th scope="col">Check in</th>
                                <th scope="col">Booking date</th>
                                <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = "SELECT *FROM bookings ORDER BY 'booking_id' DESC";
                    $data = mysqli_query($con,$q);
                    $i=1;

                    while($row = mysqli_fetch_assoc($data))
                    {
                        $checked_in='';
                        if($row['checked_in']!=1)
                        {

                        $checked_in = "<a href='?checked_in=$row[booking_id]' class='btn btn-sm  btn-primary'>Checked-in</a> <br>";
                        }
                        else{
                            $checked_in.= "<a href='?checked_in=$row[booking_id]' class='btn btn-sm btn-danger '>Delete</a>";
                        }
                        
                                    
                        echo<<<query
                        <tr>
                        <td>$i</td>
                        <td>$row[name]</td>
                        <td>$row[phoneno]</td>
                        <td>$row[roomtype]</td>
                        <td>$row[checkin]</td>
                        <td>$row[date]</td>
                        <td>$checked_in</td>
                        </tr>
                        query;
                        $i++;

                    }

                    
                    ?>
                   
                </tbody>
                </table>
</div>
</div>
</div>

</div>
</div>
</div>

              
           


    <?php require('inc/scripts.php');?>
   

        
    
  </body>
</html>