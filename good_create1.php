<?php
require_once './mysql_inc.php';

    $gd_id=$_POST['gd_id'];
    $gd_name=$_POST['gd_name'];
    $gd_price=$_POST['gd_price'];
    
    
    
    
    $sql="INSERT INTO  `s1100137213`.`GOODS` (`gd_id` ,`gd_name` ,`gd_price` )VALUES ('$gd_id',  '$gd_name',  '$gd_price');";

   
     mysql_query($sql);
     
     header("Content-Type: text/html; charset=UTF-8");
     header("refresh:1;URL=good_create.php");
        die("新增成功");
     
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <br/>
            

            
    </body>
</html>

