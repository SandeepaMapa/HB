<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){

        $conn = mysqli_connect('localhost','root','','hbwebsite') or die ("Connection Failed:" .mysqli_connect_error());
        if (isset($_POST['name']) && isset($_POST['nicnum']) && isset($_POST['email']) && isset($_POST['phonenum']) && isset($_POST['pass'])){

            $name = $_POST['name'];
            $nicnum = $_POST['nicnum'];
            $email = $_POST['email'];
            $phonenum = $_POST['phonenum'];
            $pass = $_POST['pass'];
            $cpass =$_POST['cpass'];

            $check=mysqli_query($conn,"SELECT * from `user_reg1` WHERE `email` ='$email' OR `nic`='$nicnum' OR `phonenum`='$phonenum'");
            $checkrows=mysqli_num_rows($check);


            if ($_POST['pass'] !== $_POST['cpass']) {
                die('<script type="text/javascript">alert("Passwords are not matching");</script>');
             }
             
             else{
                
        if($checkrows>0) {
                    echo "customer exists";}
                  
        else {
            $sql = "INSERT IGNORE INTO `user_reg1`(`name`, `nic`, `email`, `phonenum`, `password`) VALUES ('$name', '$nicnum','$email','$phonenum', '$pass')";

            $query = mysqli_query($conn,$sql);
            if ($query){
                echo 'Entry Successful';
            }

            else {
                'error occured';
            }
        }
        }
    }}
    ?>

