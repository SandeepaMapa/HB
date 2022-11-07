<?php



$con = mysqli_connect("localhost", "root", "", "hbwebsite");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name = $_POST['name'];
$phoneno = $_POST['phoneno'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$adults = $_POST['adults'];
$children = $_POST['children'];
 
// Attempt insert query execution
$sql = "INSERT INTO bookings(name, phoneno, checkin, checkout, adults, children) VALUES ('$name','$phoneno','$checkin','$checkout','$adults','$children')";
if(mysqli_query($con, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>