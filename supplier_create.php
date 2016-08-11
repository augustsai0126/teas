<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
 
  
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body　bgcolor="#f0f0f0">
       <form action="supplier_create1.php" method="POST">
           TEA'S原味 &nbsp; &nbsp; &nbsp; &nbsp; 供應商------建立作業<br/>
           
           項目&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   內容
           <br/><hr>
           
           供應商編號&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="sup_id"/>
           <br/><hr>  
           
           商家名稱&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="sup_name"/>
           <br/><hr>
          
           電話&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="sup_phone">          
           <br/><hr>
           
           地址&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="sup_address"/>
           <br/><hr>

            <input type="submit" name="create" value="確定新增"/>
            <input type="button" name="back"  onclick="javascript:location.href='sup_main.php'" value="返回">
        </form>
    </body>
</html>