<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    $newq=$_POST['new_q'];
    $rm_id=$_POST['rm_id'];
      
    require_once './mysql_inc.php';
    mysql_query(" UPDATE  `RAW MATERIAL` SET  `r_quantity` = '$newq' WHERE `rm_id`='$rm_id'")  ;
    // UPDATE `RAW MATERIAL` SET `r_quantity`='2' WHERE (`rm_id`='RM0007')
    echo '<center>修改成功!三秒後跳回首頁</center>';
    echo  '<meta http-equiv=refresh content=3;url=raw_main.php>';
    
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    
    </body>
</html>