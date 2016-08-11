<?php
    session_start();
if($_SESSION['user']=="")
{
   header("refresh:0;URL=main.php");
}
    require_once './mysql_inc.php';

    $em_id=$_POST['em_id'];
    $sb_time=$_POST['sb_time'];
    $sb_date=$_POST['sb_date'];
    $sb_class=$_POST['sb_class'];
    
    $sb_time = $sb_time . ":00";
     if($sb_class == "outsale"){
        $sa="外送";
    }
     else {
        $sa="現場";
    }
    
    $sql="INSERT INTO  `s1100137213`.`SALE BILL` (`em_id` ,`sb_time` ,`sb_date` ,`sb_class`)VALUES ('$em_id',  '$sb_time',  '$sb_date','$sa');";

   
   

     
     
     mysql_query($sql);
     //$sql2="SELECT `sb_id` FROM `SALE BILL`;";
     $sb_id = mysql_insert_id();    
    header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/123/saleledger_new.php?sb_id=$sb_id");
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
        <input type="button" name="reback"  onclick="javascript:location.href='sale_main.html'" value="返回">
    </body>
</html>
