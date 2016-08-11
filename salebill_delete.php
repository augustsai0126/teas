<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
$sb_id = $_GET['sb_id'];

if(!($conn=  mysql_connect("db.mis.kuas.edu.tw", "s1100137213","s1100137213" )))
            die('gg');
     mysql_query("SET NAMES utf8");
     mysql_select_db("s1100137213") or die("Select DB error");
     $query="SELECT * FROM  `SALE BILL`";
     $result=mysql_query($query);
     if(!$result)die('NO record is found');
     
$sql = sprintf("DELETE FROM  `SALE BILL` WHERE `sb_id`=%s",$sb_id);
$result1 = mysql_query($sql);
if(!$result1)
    $msg ="刪除失敗 ID: $sb_id";
else
    $msg ="刪除成功 ID: $sb_id";
echo $msg;

?>


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <br/>
            
<input type="button" name="reback" onclick="javascript:location.href='salebill_alter.php'" value="返回">
            
    </body>
</html>