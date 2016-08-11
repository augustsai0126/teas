<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
$em_id = $_GET['em_id'];
require_once './mysql_inc.php';
     
$sql = sprintf("DELETE FROM  `EMPLOYEE` WHERE (`em_id`='$em_id')");
$result = mysql_query($sql);
if(!$result)
    $msg ="刪除失敗 員工編號: $em_id";
else
    $msg ="刪除成功 員工編號: $em_id";
echo $msg;

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body　bgcolor="#f0f0f0">
        <br/>
            
<input type="button" name="reback"  onclick="javascript:location.href='employee_select.php'" value="返回">
            
    </body>
</html>