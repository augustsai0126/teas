<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
  require_once './mysql_inc.php';

    $sup_id=$_POST['sup_id'];
    $sup_name=$_POST['sup_name'];
    $sup_phone=$_POST['sup_phone'];
    $sup_address=$_POST['sup_address'];
        
    
    $sql="INSERT INTO  `s1100137213`.`SUPPLIER` (`sup_id` ,`sup_name` ,`sup_phone` ,`sup_address`)VALUES ('$sup_id',  '$sup_name',  '$sup_phone',  '$sup_address');";
 
     mysql_query($sql);
     
    header("Content-Type: text/html; charset=utf-8");
    header("refresh:1;URL=sup_main.php");
                die("新增成功");
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>            
    </body>
</html>
