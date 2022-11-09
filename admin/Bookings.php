<?php
 require('inc/essentials.php');
 require('inc/db_config.php');
 adminLogin();


 if(isset($_GET['status']))
 {
    $frm_data = filteration($_GET);

   $sq = "UPDATE bookings SET status=? WHERE booking_id=?";
   $values = [1,$frm_data['status']];
   if(update($sq,$values,'ii')){
    alert('Success','Accepted the booking!');
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
    alert('Success','Booking deleted!');
   }
   else{
    alert('error','Operation Failed!');
   }
 }

 
    $email = "thayagiperera@gmail.com";
    $subject = "Accepting the Booking";
    $body = "Hi";
    $headers = "From: River's Edge";

    if(mail($email,$subject,$body,$headers)){
        echo "alert,Email sent";
    }
    else{
        echo "alert,Email not sent";
    }
    
 


?>

 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Bookings</title>
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
                                <th class="text-center" scope="col">User Details</th>
                                <th class="text-center" scope="col">Room Type</th>
                                <th class="text-center" scope="col">Check in</th>
                                <th class="text-center" scope="col">Booking date</th>
                                <th class="text-center" scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = "SELECT *FROM bookings ORDER BY 'booking_id' DESC";
                    $data = mysqli_query($con,$q);
                    $i=1;

                    while($row = mysqli_fetch_assoc($data))
                    {
                        $status='';
                        if($row['status']!=1)
                        {

                        $status = "<a href='?status=$row[booking_id]'  class='btn btn-sm  btn-primary'>Accepted</a> <br><br>";
                        }
                        
                            $status.= "<a href='?del=$row[booking_id]' class='btn btn-sm btn-danger'>Cancel</a><br><br>";
                            $status.= "<button name='acceptbtn' class='btn btn-sm btn-danger'>test</button>";
                        
                        
                                    
                        echo<<<query
                        <tr>
                        <td class="text-center">$i</td>
                        <td class="text-center">
                           Name: $row[name]<br>
                           Contact no: $row[phoneno]<br>
                           Email: $row[email]
                                               
                           </td>
                        
                        <td class="text-center">$row[roomtype]</td>
                        <td class="text-center">$row[checkin]</td>
                        <td class="text-center">$row[date]</td>
                        <td class="text-center">$status</td>
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