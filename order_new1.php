<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    require_once './mysql_inc.php';

    $emid=$_POST['emid'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $time = $time . ":00";
    
    $sql="INSERT INTO  `s1100137213`.`ORDER` (`em_id` ,`od_time` ,`od_date` )VALUES ('$emid',  '$time',  '$date');";
    mysql_query($sql);
    
    
     $sql2="SELECT `od_id` FROM `ORDER`;";
     $result = mysql_query($sql2);
     while($cor = mysql_fetch_array($result))
     {
     $od_id=$cor['od_id'];
     }
     
    
    header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/123/purchase_new.php?od_id=$od_id");
    exit;
    
   
    
     
   

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        ?>
        <input type="button" name="reback" style="font-size:25pt; width:150px;height:50px" onclick="javascript:location.href='salebill_new.html'" value="返回">
    </body>
</html>
