<?php

//frontend purpose data

define('SITE_URL', 'http://127.0.0.1/HB/');
define('CAROUSEL_IMG_PATH', SITE_URL.'Photos/carousel/');
define('PHOTOS_FOLDER','Photos/');
define('ROOMS_IMG_PATH', SITE_URL.'Photos/Rooms/');


//backend purpose data

define('UPLOAD_IMAGE_PATH',$_SERVER['DOCUMENT_ROOT'].'/HB/Photos/');
define('ABOUT_FOLDER','about/');
define('CAROUSEL_FOLDER','carousel/');
define('FACILITIES_FOLDER','Facilities/');
define('ROOMS_FOLDER','Rooms/');
define('USERS_FOLDER','users/');

// sendgrid api key

define('SENDGRID_API_KEY',"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");



function adminLogin()
{
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        echo"<script>
        window.location.href='index.php';
        </script>";
        exit; 
 }
}

 function redirect($url){
    echo"<script>
    window.location.href='$url';
    </script>";
    exit;
 }


function alert($type,$msg){
    $bs_class = ($type == "success")? "alert-success" : "alert-danger";
    echo <<<alert
    <div class="alert ${bs_class} alert-dismissible fade show custom alert" role="alert">
    <strong class="me-3">$msg</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    
  alert;
}

function uploadImage($image, $folder)
{
  $valid_mime = ['image/jpeg', 'image/png', 'image/webp'];
  $img_mime = $image['type'];

  if(!in_array($img_mime, $valid_mime)){
    return 'inv_img'; //invalid image mime or format
  }
  elseif(($image['size']/(1024*1024))>2){
    return 'inv_size'; //invalid image size
  }
  else{
    $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
    $rname = 'IMG_' .random_int(11111,99999).".$ext";

    $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
    if(move_uploaded_file($image['tmp_name'],$img_path)){
      return rname;
    }
    else{
      return 'upd_failed';
    }
  }
  if(!in_array($img_mime,$valid_mime)){
    return 'inv_img'; // invalid image mime or format
  }

  else if(($image['size']/(1024*1024))>2){
    return 'inv_size'; // invalid size greater than 2 mb
  }
  else{
       $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
       $rname = 'IMG_'.random_int(11111,99999)."$ext";

       $img_path = UPLOAD_IMAGE_PATH.$folder.$rname;
       if (move_uploaded_file($image['tmp_name'],$img_path)){
          return $rname;
       }
       else{
        return 'upd_failed';
       }

  }
}

?>