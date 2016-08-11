<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}

    require_once './mysql_inc.php';
    
    $result_2 = mysql_query("SELECT sup_name FROM  `SUPPLIER` ");
    $a="";
     while($cursor_2 = mysql_fetch_array($result_2))
    {
        $a = $a . "<option>" . $cursor_2['sup_name'] . "</option>";
    }
    
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body　bgcolor="#f0f0f0">
        <form action="supplier_select1.php" method="post">
           TEA'S原味 &nbsp; &nbsp; 供應商----查詢修改刪除作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           供應商名字&nbsp; &nbsp; &nbsp; &nbsp; <select name="sup_name"> 
               <?php
               echo $a;
               ?>
           </select><br/>
           <hr>
           
            
       
            <input type="submit" name="inquire"  onclick="javascript:location.href='supplier_select1.php'" value="查詢資料">
            <input type="button" name="back"  onclick="javascript:location.href='sup_main.php'" value="返回"> 
        </form>
    </body>
</html>
