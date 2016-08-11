<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
  require_once './mysql_inc.php';

    $rm_id=$_POST['rm_id'];
    $rm_name=$_POST['rm_name'];
    $rm_cost=$_POST['rm_cost'];
    $sup_name=$_POST['sup_name'];
    $result = mysql_query("SELECT  sup_id FROM  `SUPPLIER` WHERE sup_name='$sup_name'");
    $a="";
     while($cursor = mysql_fetch_array($result))
    {
        $a .=$cursor['sup_id'] ;
    }//找供應商名字的編號
    $sup_id=$a; //放近去

    
    $sql="INSERT INTO  `s1100137213`.`RAW MATERIAL` (`rm_id` ,`rm_name` ,`rm_cost` ,`sup_id`)VALUES ('$rm_id',  '$rm_name',  '$rm_cost',  '$sup_id');";

   
     mysql_query($sql);
     
   
    header("Content-Type: text/html; charset=utf-8");
    header("refresh:1;URL=raw_main.php");
                die("新增成功");

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
