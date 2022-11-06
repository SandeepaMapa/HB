<?php
 require('../inc/db_config.php');
 require('../inc/essentials.php');
 adminLogin();

if(isset($_POST['add_rooms']))
   {
    $facilities = filteration(json_decode($_POST['facilities']));
    $frm_data = filteration($_POST);
    $flag = 0;

    $q1 = "INSERT INTO rooms(name, price, quantity, adult, children, description) VALUES (?,?,?,?,?,?)";
    $values = [$frm_data['name'],$frm_data['price'],$frm_data['quantity'],$frm_data['adult'],$frm_data['children'],$frm_data['description']];

    if(insert($q1,$values,'siiiis')){
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
    $res = select("SELECT * FROM rooms WHERE removed=?" , [0],'i');
    $i = 0;

    $data = "";

    while($row = mysqli_fetch_assoc($res))
    {

      if($row['status']==1){
         $status = "<button onclick='toggle_status($row[id],0)' class='btn btn-dark btn-sm shadow-none'>active</button>";
      }
      else{
         $status = "<button onclick='toggle_status($row[id],1)' class='btn btn-warning btn-sm shadow-none'>inactive</button>";
        
      }
     
     $i++;

      $data.= "
      <tr class='align-middle'>
       <td>$i</td>
       <td>$row[name]</td>
       <td>
        <span class='badge rounded-pill bg-light text-dark'>
         Adults: $row[adult]
        </span><br>
        <span class='badge rounded-pill bg-light text-dark'>
         Children: $row[children]
        </span>
       <td>Rs. $row[price]</td>
       <td>$row[quantity]</td>
       <td>$status</td>
       <td>
           <button type='button' onclick='edit_details($row[id])' class='btn btn-primary shadow-none btn-sm' data-bs-toggle='modal' data-bs-target='#edit-room'>
              <i class='bi bi-pencil-square'></i> 
           </button>
           <button type='button' onclick=\"room_images($row[id], '$row[name]')\" class='btn btn-info shadow-none btn-sm' data-bs-toggle='modal' data-bs-target='#room-images'>
              <i class='bi bi-images'></i> 
           </button>
           <button type='button' onclick='remove_room($row[id])' class='btn btn-danger shadow-none btn-sm'>
              <i class='bi bi-trash'></i> 
           </button>
       </td>
      </tr>
      ";
    }
    echo $data;
    
  }
   

  if(isset($_POST['get_room']))
  {
    $frm_data = filteration($_POST);

    $res1 = select("SELECT * FROM rooms WHERE id=?",[$frm_data['get_room']],'i');
    $res2 = select("SELECT * FROM room_facilities WHERE room_id=?",[$frm_data['get_room']],'i');

    $roomdata = mysqli_fetch_assoc($res1);
    $facilities = [];

    if(mysqli_num_rows($res2)>0){
      while($row =  mysqli_fetch_assoc($res2)){
        array_push($facilities,$row['facilities_id']);
      }
    }

     $data = ["roomdata" => $roomdata, "facilities" => $facilities];
    $data = json_encode($data);

    echo $data;
  }

  
  
?>