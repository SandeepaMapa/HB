<?php

require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

   if(isset($_POST['add_feature']))
   {
    $frm_data = filteration($POST);
    $q="INSERT INTO `features`(`name`) VALUES (?)";
    $values=[$frm_data['name']];
    $res=insert($q,$values,'s');
    echo $res;
   }

   if(isset($_POST['get_feature']))
   {
     $res = selectAll('features');
     $i=1;

     while($row = mysql_fetch_assoc($res))
     {
        echo <<<data
        <tr>
         <td>$i</td>
         <td>$row[name]</td>
         <td>
           <button type="button" onclick="rem_feature($row[id])" class="btn btn-danger btn-sm shadow-none">
             <i class="bi bi-trash"></i>Delete
             </button>
         </td>
        </tr>
    data;
    $i++;
     }
   }

?>