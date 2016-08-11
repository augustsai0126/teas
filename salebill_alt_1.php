<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
$sb_id=$_POST['sb_id'];
$sb_time=$_POST['sb_time'];
$sb_class=$_POST['sb_class'];
$sb_time.=":00";
$sb_date=$_POST['sb_date'];
require_once './mysql_inc.php';
$result = mysql_query("SELECT * FROM `SALE BILL`");     //讀取銷貨資訊 
//$j = mysql_query("SELECT COUNT(EmployeeID) FROM Employee");
while ($sale = mysql_fetch_array($result))
 {   
    mysql_query(" UPDATE  `SALE BILL` set `sb_time`='$sb_time' WHERE  `SALE BILL`.`sb_id`=$sb_id");
    mysql_query(" UPDATE  `SALE BILL` SET  `sb_date`='$sb_date' WHERE  `SALE BILL`.`sb_id`=$sb_id") ; 
    mysql_query(" UPDATE  `SALE BILL` SET  `sb_class`='$sb_class' WHERE  `SALE BILL`.`sb_id`=$sb_id") ; 
 }

header("Content-Type: text/html; charset=utf-8");
                header("refresh:1;URL=salebill_alter.php");
                die("修改完成");
    exit;

?>
