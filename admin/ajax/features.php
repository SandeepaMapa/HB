<?php
 require('../inc/essentials.php');
 require('../inc/db_config.php');
 adminLogin();



if(isset($_POST['add_feature']))
   {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO features(name) VALUES (?)"; 
    $values = [$frm_data['name']];
    $res = insert($q,$values,'s');
    echo $res;
   }


   if(isset($_POST['get_features']))
    {
     $res = selectAll('features');
     $i=1;

     while($row = mysqli_fetch_assoc($res))
       {
        echo <<<data
        <tr>
          <td>$i</td>
          <td>$row[name]</td>
         <td>
           <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger btn-sm shadow-none">
             <i class="bi bi-trash">"<a href='?del=$row[sr_no]'class='btn btn-sm btn-danger mt-2'>Delete</a>"</i>
             </button>
         </td>
        </tr>  
    data; 
    $i++;
     }
   }

   if(isset($_POST['rem_feature']))
   {
    $frm_data = filteration($_POST);
    
    $sq = "DELETE FROM features WHERE id=?";
    $values = [$frm_data['rem_feature']];
    if(delete($sq,$values,'i')){
      alert('Success','Data deleted!');
    }
    else{
     alert('error','Operation Failed!');
    }
   }
   
   
   
?>