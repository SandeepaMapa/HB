<?php
    if(isset($_POST['submit'])) {

    //get the name and comment entered by user
    $name = $_POST['name'];
    $nicnum = $_POST['nicnum'];
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $pass = $_POST['pass'];
    $cpass =$_POST['cpass'];

    //connect to the database
    $dbc = mysqli_connect('localhost','root','','hbwebsite') or die('Error connecting to MySQL server');
    $check=mysqli_query($conn,"SELECT * from `user_reg1` WHERE `email` ='$email' OR `nic`='$nicnum' OR `phonenum`='$phonenum'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows>0) {
      echo "customer exists";
   } else {  
    //insert results from the form input
    $sql = "INSERT IGNORE INTO `user_reg1`(`name`, `nic`, `email`, `phonenum`, `password`) VALUES ('$name', '$nicnum','$email','$phonenum', '$pass')";

      $result = mysqli_query($dbc, $sql) or die('Error querying database.');

      mysqli_close($dbc);
    }
    echo "Customer Added";
    };
  ?>