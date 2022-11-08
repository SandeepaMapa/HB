<?php



$con = mysqli_connect("localhost", "root", "", "hbwebsite");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name = $_POST['name'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$date = $_POST['date'];
$time = $_POST['time'];
$NoOfPeople = $_POST['NoOfPeople'];
$bookingtype = $_POST['bookingtype'];
$msg = $_POST['msg'];
 
// Attempt insert query execution
$sql = "INSERT INTO rest_reserv(name, email, phoneno, date, time, NoOfPeople, bookingtype,msg) 
       VALUES ('$name','$email','$phoneno','$date','$time','$NoOfPeople','$bookingtype','$msg')";
if(mysqli_query($con, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>