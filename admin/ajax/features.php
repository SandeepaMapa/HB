<?php
 require('../inc/essentials.php');
 require('../inc/db_config.php');
 adminLogin();



if(isset($_POST['add_feature']))
   {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO facilities(name) VALUES (?)"; 
    $values = [$frm_data['name']];
    $res = insert($q,$values,'s');
    echo $res;
   }


   if(isset($_POST['get_features']))
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
           <button type="button" onclick="rem_features($row[id])" class="btn btn-danger btn-sm shadow-none">
             <i class="bi bi-trash"></i>Delete
             </button>
         </td>
        </tr>  
    data; 
    $i++;
     }
   }

   

   if(isset($_POST['rem_features']))
   {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_features']];

    $check_q = select('SELECT * FROM room_facilities WHERE facilities-id=?',[$frm_data['rem_features']]);

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