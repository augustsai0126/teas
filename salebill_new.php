<?php

session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
   require_once './mysql_inc.php';
    
    $result_2 = mysql_query("SELECT  em_id FROM  `EMPLOYEE` ");
    $a="";
     while($cursor_2 = mysql_fetch_array($result_2))
    {
        $a = $a . "<option>" . $cursor_2['em_id'] . "</option>";
    }
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body bgcolor="#f0f0f0">
       <form action="salebill_new1.php" method="POST">
           TEA'S原味 &nbsp; &nbsp; 銷貨單----建立作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           員工編號&nbsp; &nbsp; &nbsp; &nbsp; <select name="em_id"> 
               <?php
               echo $a;
               ?>
           </select><br/>
           <hr>
           時間&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="time" name="sb_time"/><br/>
           <hr>
           日期&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="date" name="sb_date"/><br/>
           <hr>
            <input type="radio" name="sb_class" value="outsale"/>外送
            <input type="radio" name="sb_class" value="insale"/>現場 <br/>
            <input type="submit" name="inquire" onclick="javascript:location.href='saleledger.php'" value="下一步">
            <input type="button" name="back" onclick="javascript:location.href='sale_main.php'" value="返回">
        </form>
    </body>
</html>
