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

      if($sendgrid->send($email)){
            return 1;
      }
      else{
        return 0;
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
if(!send_mail($data['email'],$data['name'],$token)){
    echo'mail_failed';
    exit;
}

$enc_pass = password_hash($data['pass'],PASSWORD_BCRYPT);

$query ="INSERT INTO 'user_cred' ('nicnum', 'name', 'email', 'address', 'phonenum', 'pincode', 
  'password',  'token') VALUES (?,?,?,?,?,?,?,?)";

$values = [$data['nicnum'],$data['name'],$data['email'],$data['address'],$data['phonenum'],
$enc_pass,$token];

if(insert($query,$values,'sssssss')){
    echo 1;
}
else{
    echo 'ins_failed';
}


}


?>