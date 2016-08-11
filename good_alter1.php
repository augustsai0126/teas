<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './mysql_inc.php';


$gd_id=$_POST['gd_id'];
$gd_name=$_POST['gd_name'];
$gd_price=$_POST['gd_price'];



$sql="UPDATE `GOODS` SET `gd_name`='$gd_name', `gd_price`='$gd_price' WHERE (`gd_id`='$gd_id')";
mysql_query($sql); 

header("Content-Type: text/html; charset=utf-8");
                header("refresh:1;URL=good_select");
                die("修改完成");
?>
