<?php
  require('admin/inc/db_config.php');
  require('admin/inc/essentials.php');

  $contact_q = "SELECT * FROM contact_details WHERE sr_no=?";
  $values = [1];
  $contact_r = mysqli_fetch_assoc(select($contact_q, $values, 'i'));

?>
<nav id="nav-bar" class="navbar navbar-expand-lg navbar-light px-lg-4 py-lg-3 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand f2 text-white" href="#"><img class="logo" src="Photos\logo neww.png" width="150" height="40"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="Accomodation.php">Accomodation</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="Restaurant.php">Restaurant</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="Events.php">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="Gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="contact.php">Contact</a>
        </li>

        <li class="nav-item">
          <a class="nav-link me-2 text-white" href="About Us.php">About Us</a>
        </li>
</ul>
      
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2 text-white border-white " data-bs-toggle="modal" data-bs-target="#loginModal">
  Login
</button>
<button type="button" class="btn btn-outline-dark shadow-none text-white border-white" data-bs-toggle="modal" data-bs-target="#registerModal">
  Register
</button> &nbsp;&nbsp;
<button type="button" class="btn btn-outline-dark shadow-none text-white border-white" data-bs-toggle="modal" data-bs-target="">
<a class="text-white" style="text-decoration:none; " href="admin\index.php">Admin</a>
</div>
</button>
  
    </div>
  </div>
</nav>

<!-- Modal -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="login.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>
          User Login</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
        <label  class="form-label">Email address</label>
        <input type="email" name="email" class="form-control shadow-none">
         
      </div>

      <div class="mb-4 ">
        <label  class="form-label">Password</label>
        <input type="password" name="password" class="form-control shadow-none">
      </div> 

      <div class="d-flex align-items-center justify-content-between mb-2">
        <button type="submit" class="btn btn-dark shadow-none">LOGIN  </button>
        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
      </div>
          
        </div>
        
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="register-form" >
        <div class="modal-header">
          <h5 class="modal-title d-flex align-items-center">
          <i class="bi bi-person-lines-fill fs-3 me-2"></i>
          User Registration</h5>
          <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
          Important: Your details must match with your ID (NIC, Passport) details.
       </span>
       <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label" for="name">Name</label>
        <input name="name" id="name" type="text" class="form-control shadow-none" required >
          </div>
          <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label" for="nicnum">NIC Number</label>
        <input name="nicnum" id="nicnum"  type="text" class="form-control shadow-none" required>
          </div>
        <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label" for="email">Email</label>
        <input name="email" id="email" type="email" class="form-control shadow-none" required>
           </div>
           <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label" for="phonenum">Phone Number</label>
        <input name="phonenum" id="phonenum" type="number" class="form-control shadow-none" required>
          </div>
         
        <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label" for="pass">Password</label>
        <input name="pass" id="pass" type="password" class="form-control shadow-none" required>
        </div>
           <div class="col-md-6 ps-0 mb-3">
          <label  class="form-label">Confirm Password</label>
        <input name="cpass" type="password" class="form-control shadow-none">
           </div>
         
           <div class="text-center my-1 mb-1">
            <button type="submit" name="submit" class="btn btn-dark shadow-none">Register</button>
           </div>
          
          </div>
        </div>
      
      
          
        </div>
        
        </form>

      </div>
    </div>
  </div>

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
          echo '<script type="text/javascript">';
          echo ' alert("Customer Exists")';  //not showing an alert box.
          echo '</script>';}
                  
        else {
            $sql = "INSERT IGNORE INTO `user_reg1`(`name`, `nic`, `email`, `phonenum`, `password`) VALUES ('$name', '$nicnum','$email','$phonenum', '$pass')";

            $query = mysqli_query($conn,$sql);
            if ($query){
              echo '<script type="text/javascript">';
              echo ' alert("Registration Completed Successfully")';  //not showing an alert box.
              echo '</script>';
            }

            else {
              echo '<script type="text/javascript">';
              echo ' alert("Error Occured")';  //not showing an alert box.
              echo '</script>';
            }
        }
        }
    }}
    ?>



