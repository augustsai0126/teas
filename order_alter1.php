<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
$od_id =$_POST['od_id'];
$od_time=$_POST['od_time'];
$od_time.=":00";
$od_date=$_POST['od_date'];

require_once './mysql_inc.php';
$result = mysql_query("SELECT * FROM `ORDER`");     //讀取銷貨資訊 
while ($order = mysql_fetch_array($result))
 {   
    mysql_query(" UPDATE  `ORDER` SET `od_time`='$od_time' WHERE  `ORDER`.`od_id`=$od_id");
    mysql_query(" UPDATE  `ORDER` SET `od_date`='$od_date' WHERE  `ORDER`.`od_id`=$od_id") ;  
 }
header("Content-Type: text/html; charset=utf-8");
                header("refresh:1;URL=order_select.php");
                die("修改完成");
    exit;

?>
