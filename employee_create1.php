<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
   require_once './mysql_inc.php';
   $em_name=$_POST['em_name'];
   $em_phone=$_POST['em_phone'];
   $em_address=$_POST['em_address'];
   $em_id=$_POST['em_id'];
   $em_sex=$_POST['em_sex'];
   $em_class=$_POST['em_class'];
   $em_password=$_POST['em_password'];
   $sql="INSERT INTO  `s1100137213`.`EMPLOYEE` (`em_id` ,`em_name` ,`em_phone` ,`em_address`,`em_password`,`em_sex`,`em_class`)VALUES ('$em_id',  '$em_name',  '$em_phone',  '$em_address', '$em_password', '$em_sex', '$em_class');";

   
     mysql_query($sql);
     
   
    header("Content-Type: text/html; charset=utf-8");
    header("refresh:1;URL=em_main.php");
                die("新增成功");
 ?>
