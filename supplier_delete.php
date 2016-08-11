<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
$sup_id = $_GET['sup_id'];
require_once './mysql_inc.php';
     
$sql = sprintf("DELETE FROM  `SUPPLIER` WHERE (`sup_id`='$sup_id')");
// DELETE FROM `SUPPLIER` WHERE (`sup_id`='S003')
$result = mysql_query($sql);
if(!$result)
    $msg ="刪除失敗 ID: $sup_id";
else
    $msg ="刪除成功 ID: $sup_id";
echo $msg;

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <br/>
            
<input type="button" name="reback"  onclick="javascript:location.href='supplier_select.php'" value="返回">
            
    </body>
</html>