<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body　bgcolor="#f0f0f0">
       <form action="good_create1.php" method="POST">
           TEA'S原味 &nbsp; &nbsp; &nbsp; &nbsp; 商品表------建立作業<br/>
           
           項目&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   內容
           <br/><hr>
           
           商品編號&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="gd_id"/>
           <br/><hr>  
           
           名稱&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="gd_name"/>
           <br/><hr>
          
           價格&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="gd_price">          
           <br/><hr>
           
           

            <input type="submit" name="create" value="確定新增"/>
            <input type="button" name="back"  onclick="javascript:location.href='good_main.php'" value="返回">
        </form>
    </body>
</html>