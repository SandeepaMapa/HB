<?php

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();


if(isset($_POST['add_image']))
{
    $img_r = uploadImage($_FILES['picture'],CAROUSEL_FOLDER);

    if($img_r == 'inv_img'){
        echo $img_r;
    }
    else if( $img_r== 'inv_size'){
        echo $img_r;
    }
    else if($img_r == 'upd_failed'){
        echo $img_r;
    }
    else{
        $q = "INSERT INTO `carousel`(`image`) VALUES (?)";
        $values = [$img_r];
        $res = insert($q, $values, 'ss');
        echo $res;
    }
}

if(isset($_POST['get_Carousel']))
{
    $res = selectAll('Carousel');

    while($row = mysqli_fetch_assoc($res))
    {
        $path = CAROUSEL_IMG_PATH;
        echo <<<data
            <div class="col-md-2 mb-3">
                <div class="card bg-dark ></div>
            </div>
        <!--fill from essentials-->
    }
}








if(isset($_POST['rem_image']))
{
    $frm_data = filteration($POST);
    $values   = [$frm_data[rem_image]];

    $pre_q = "SELECT * FROM 'carousel' WHERE 'sr_no'=?";
    $res = select($pre_q, values,'i');
    $img = mysqli_fetch_assoc($res);
    
    $res = delete($q, values,'1');
    echo $res;
}    

?>