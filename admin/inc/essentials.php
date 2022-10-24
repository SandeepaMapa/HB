<?php

//frontend purpose data

define('SITE_URL', 'http://127.0.0.1/HB/');
define ('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT']);
define('CAROUSEL_IMG_PATH', SITE_URL.'Photos/carousel/');


//backend purpose data


define('ABOUT_FOLDER','about/');
define('CAROUSEL_FOLDER','carousel/');
define('FACILITIES_FOLDER','facilities/');
define('ROOMS_FOLDER','rooms/');
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

}

?>