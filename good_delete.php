<?php

require_once './mysql_inc.php';

$gd_id = $_GET['gd_id'];


$sql = sprintf("DELETE FROM  `GOODS` WHERE (`gd_id`='$gd_id')");
$result=  mysql_query($sql);
if(!$result){
    $msg = "刪除失敗  ID: $gd_id";
}
else {
    $msg = "刪除成功  ID: $gd_id";
}
echo $msg;
header("Content-Type: text/html; charset=UTF-8");
header("refresh:2;URL=good_select.php");
       die("自動返回");



/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
