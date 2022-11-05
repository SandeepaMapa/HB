<?php
 require('../inc/essentials.php');
 require('../inc/db_config.php');
 adminLogin();



if(isset($_POST['add_facilities']))
   {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO facilities(name) VALUES (?)"; 
    $values = [$frm_data['name']];
    $res = insert($q,$values,'s');
    echo $res;
   }


   if(isset($_POST['get_facilities']))
    {
     $res = selectAll('facilities');
     $i=1;

     while($row = mysqli_fetch_assoc($res))
       {
        echo <<<data
        <tr>
          <td>$i</td>
          <td>$row[name]</td>
         <td>
           <button type="button" onclick="rem_facilities($row[id])" class="btn btn-danger btn-sm shadow-none">
             <i class="bi bi-trash"></i>Delete
             </button>
         </td>
        </tr>  
    data; 
    $i++;
     }
   }

   

   if(isset($_POST['rem_facilities']))
   {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_facilities']];

    $check_q = select('SELECT * FROM room_facilities WHERE facilities_id=?',[$frm_data['rem_facilities']],'i');

    if(mysqli_num_rows($check_q)==0){
      $q = "DELETE FROM facilities WHERE id=?";
      $res = delete($q,$values,'i');
      echo $res;
    }
    else{
      echo 'room_added';
    }
    
   }


  
   
   
?>