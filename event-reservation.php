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
$NoOfPeople = $_POST['NoOfPeople'];
$time = $_POST['time'];
$menutype = $_POST['menutype'];
$msg = $_POST['msg'];
 
// Attempt insert query execution
$sql = "INSERT INTO event_reserv(name, email, phoneno, date, NoOfPeople,time , menutype,msg) 
       VALUES ('$name','$email','$phoneno','$date','$NoOfPeople','$time','$menutype','$msg')";
if(mysqli_query($con, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>