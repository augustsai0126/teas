<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=main.php");
}
    $em_id=$_POST['em_id'];
    $em_name=$_POST['em_name'];
    $em_phone=$_POST['em_phone'];
    $em_address=$_POST['em_address'];
    $em_sex=$_POST['em_sex'];
require_once './mysql_inc.php';

$sql="UPDATE `EMPLOYEE` SET `em_id`='$em_id', `em_name`='$em_name', `em_phone`='$em_phone', `em_address`='$em_address', `em_sex`='$em_sex'WHERE (`em_id`='$em_id')";
mysql_query($sql); //修改

header("Content-Type: text/html; charset=utf-8");
                header("refresh:1;URL=employee_select");
                die("修改完成");

?>

