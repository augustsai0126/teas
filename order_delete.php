<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}

$od_id = $_GET['od_id'];
$em_id = $_GET['em_id'];

require_once './mysql_inc.php';
     
$sql = sprintf("DELETE FROM  `ORDER` WHERE (`od_id`='$od_id')");
$result = mysql_query($sql);
if(!$result)
    $msg ="刪除失敗 ID: $od_id";
else
    $msg ="刪除成功 ID: $od_id";
echo $msg;

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <br/>
       <?php     
       echo ' <input type="button" name="back" value="返回" onclick="javascript:location.href=\'order_select1.php?em_id='.$em_id.'\'">'
        ?>    
    </body>
</html>