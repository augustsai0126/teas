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
    <body>
       <form action="order_new1.php" method="POST">
           TEA'S原味 &nbsp; &nbsp; 進貨單----建立作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           員工編號&nbsp; &nbsp; &nbsp; &nbsp; <select name="emid"> 
               <?php
               echo $a;
               ?>
           </select><br/>
           <hr>
           時間&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="time" name="time"/><br/>
           <hr>
           日期&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="date" name="date"/><br/>
           <hr>
            
            <input type="submit" name="inquire"  onclick="javascript:location.href='order_new1.php'" value="下一步">
            <input type="button" name="inquire"  onclick="javascript:location.href='order_main.php'" value="返回">
        </form>
    </body>
</html>