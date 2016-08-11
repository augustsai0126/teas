<?php


    require_once './mysql_inc.php';
    
    $result_gd = mysql_query("SELECT gd_name FROM  `GOODS` ");
    $a="";
     while($cursor_gd = mysql_fetch_array($result_gd))
    {
        $a = $a . "<option>" . $cursor_gd['gd_name'] . "</option>";
    }
    
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body　bgcolor="#f0f0f0">
        <form action="good_select1.php" method="post">
           TEA'S原味 &nbsp; &nbsp; 商品----查詢修改刪除作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           商品名字&nbsp; &nbsp; &nbsp; &nbsp; <select name="gd_name"> 
               <?php
               echo $a;
               ?>
           </select><br/>
           <hr>
           
            
       
            <input type="submit" name="inquire"  onclick="javascript:location.href='good_select1.php'" value="查詢資料">
            <input type="button" name="back"  onclick="javascript:location.href='good_main.php'" value="返回"> 
        </form>
    </body>
</html>
