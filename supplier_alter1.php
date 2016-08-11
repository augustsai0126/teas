<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
$sup_id = $_POST['sup_id'];
$sup_name=$_POST['sup_name'];
$sup_phone=$_POST['sup_phone'];
$sup_address=$_POST['sup_address'];
require_once './mysql_inc.php';

$sql="UPDATE `SUPPLIER` SET `sup_name`='$sup_name', `sup_phone`='$sup_phone', `sup_address`='$sup_address' WHERE (`sup_id`='$sup_id')";
mysql_query($sql); //修改
header("Content-Type: text/html; charset=utf-8");
                header("refresh:1;URL=supplier_select.php");
                die("修改完成");
    exit;
?>
