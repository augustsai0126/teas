<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
$rm_id = $_GET['rm_id'];
require_once './mysql_inc.php';
     
$sql = sprintf("DELETE FROM  `RAW MATERIAL` WHERE (`rm_id`='$rm_id')");
$result = mysql_query($sql);
if(!$result)
    $msg ="刪除失敗 ID: $rm_id";
else
    $msg ="刪除成功 ID: $rm_id";
echo $msg;

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <br/>
            
<input type="button" name="reback"  onclick="javascript:location.href='rawmatier_select.php'" value="返回">
            
    </body>
</html>