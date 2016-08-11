<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}

?>

<html>
    <head>
        <style type="text/css">

input.groovybutton
{
   font-size:15px;
   font-family:Century Gothic,sans-serif;
   font-weight:bold;
   width:200px;
   height:50px;
   background-color:#EEEEEE;
   background-image:url(back05.gif);
   border-style:ridge;
   border-color:#CCCCCC;
   border-width:2px;
}

</style>
        <title>TEA'S原味後台作業系統</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    
    <body bgcolor="#99FFFF">
        
        <p align="center">
        <font face="微軟正黑體" size="8"><b>歡迎使用管理系統</b></font> 
        <p align="center">　</p>
         <p align="center">　</p>
         <p align="center">　</p>
         <p align="center">　</p>
         <form name="groovyform">
         <p align="center">    
         <font face="微軟正黑體" size="8">             
         <input type="button" name="groovybtn1" class="groovybutton" value="銷貨管理" onclick="javascript:location.href='sale_main.php';"/>
         <input type="button" name="groovybtn1" class="groovybutton" value="進貨管理" onclick="javascript:location.href='order_main.php';"/><br>
         <input type="button" name="groovybtn1" class="groovybutton" value="供應商管理" onclick="javascript:location.href='sup_main.php';"/>
         <input type="button" name="groovybtn1" class="groovybutton" value="商品管理" onclick="javascript:location.href='good_main.php';"/>
         <input type="button" name="groovybtn1" class="groovybutton" value="原料管理" onclick="javascript:location.href='raw_main.php';"/><br><br>
         <input type="button" name="groovybtn1" class="groovybutton" value="個人資料修改" onclick="javascript:location.href='re.php';"/><br><br>
         <input type="button" value="登出" align="left" onclick="javascript:location.href='login.html';"/>
         </font>
         </p>
         </form>       
    </body>
</html>
