<?php

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');
require("../inc/sendgrid/sendgrid-php.php");

function send_mail($email,$name,$token)
{
    $email = new \sendGrid\MAil\MAil();
    $email->setForm("thayagiperera@gmail.com", "Rives edge");
    $email->setSubject("Account Verification Link");

    $email->addTo($email);
    
    $email->addCountent("test/plain", "and easy to do anywhere,even with PHP");
    $email->addContent(
        "text/html"
        "
        Click the link tp confirm you email; <br>
        <a href='".SITE_URL."email_confirm.php?email=$email&token=$token"."'>
        CLICK ME
        </a>
        "
    );

    $sendgrid = new \sendGrid(SENDGRID_API_KEY);
    try{
        $response = $sendgrid->send($email);
        print $response->statusCode() . "\n";
        print_r($response->headers());
        print $response->body() . "\n";
    } 
    catch (Exception $e) {
        eho 'caught exception: '. $e->getMessage() ."\n";
    }
}

if(isset($_POST['register']))
{
    $data = filteration($_POST);

// match password and  confirm password field

if($data['pass'] !=$data['cpass']){
echo 'pass_mismatch';
exit;
}

//check user exites or not
$u_exist = select("SELECT * FROM 'user_cred' WHERE 'email' = ? AND 'phonenum' = ? LIMIT 1", 
[$data['email'],$data['phonenum']]"ss");

if(mysqli_num_rowa($u_exit)!=0){
$u_exit_fetch = mysqli_fetch_assoc($u_exit);
echo ($u_exit_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
exit;
}

// send confirmation link to user's email

$token = bin2hex(random_bytes(16));
send_mail($data['email'],$data['name'],$token);


}
?>