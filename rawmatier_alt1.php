<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
$rm_id=$_POST['rm_id'];
$rm_cost=$_POST['rm_cost'];
require_once './mysql_inc.php';

$sql="UPDATE `RAW MATERIAL` SET `rm_cost`='$rm_cost' WHERE (`rm_id`='$rm_id')";
mysql_query($sql); //修改

header("Content-Type: text/html; charset=utf-8");
                header("refresh:1;URL=rawmatier_select");
                die("修改完成");

?>
