<?php
 require('../inc/db_config.php');
 require('../inc/essentials.php');
 adminLogin();

if(isset($_POST['add_room']))
   {
    $features = filteration(json_decode($_POST['features']));
    $frm_data = filteration($_POST);

    $q1 = "INSERT INTO rooms(name, price, quantity, adult, children) VALUES ('','','','','')";
    $values = [$frm_data['name'],$frm_data['price'],$frm_data['quantity'],$frm_data['adult'],$frm_data['children']];

    if(insert($ql,$values,'siiii')){
      
    }
  }

   
   
?>