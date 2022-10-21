<?php
 require('../inc/db_config.php');
 require('../inc/essentials.php');
 adminLogin();

if(isset($_POST['add_room']))
   {
    $facilities = filteration(json_decode($_POST['facilities']));
    $frm_data = filteration($_POST);
    $flag = 0;

    $q1 = "INSERT INTO rooms(name, price, quantity, adult, children) VALUES (?,?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['price'],$frm_data['quantity'],$frm_data['adult'],$frm_data['children']];

    if(insert($q1,$values,'siiii')){
      $flag = 1;
    }

    $room_id = mysqli_insert_id($con);

    $q2 = "INSERT INTO room_facilities(room_id, facilities_id) VALUES (?,?)";
 
    if($stmt = mysqli_prepare($con,$q2))
    {
       foreach($facilities as $f)
       {
         mysqli_stmt_bind_param($stmt,'ii',$room_id,$f);
         mysqli_stmt_execute($stmt);
       }
       mysqli_stmt_close($stmt);
    }
    else{
      $flag = 0;
      die('query cannot be prepared - insert');
    }

    if($flag){
      echo 1;
    }
    else{
      echo 0;
    }
 
  }



  if(isset($_POST['get_all_rooms']))
  {
    $res = selectAll('rooms');
    $i = 0;

    $data = "1";

    while($row = mysqli_fetch_assoc($res))
    {
      $data.= "
      <tr class='align-middle'>
       <td>$i</td>
       <td>$row[name]</td>
       <td>
        <span class='badge rounded-pill bg-light text-dark'>
         Adult: $row[adult]
        </span><br>
        <span class='badge rounded-pill bg-light text-dark'>
         Children: $row[children]
        </span>
       <td>$row[price]</td>
       <td>$row[quantity]</td>
       <td>Status</td>
       <td>Buttons</td>
      </tr>
      ";
    }
    echo $data;
  }
   
?>