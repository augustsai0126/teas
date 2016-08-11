<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    require_once './mysql_inc.php';
    
    $result= mysql_query("SELECT DISTINCT em_id FROM  `SALE BILL` ");
    $a="";
     while($cursor = mysql_fetch_array($result))
    {
        $a = $a . "<option>" . $cursor['em_id'] . "</option>";
    }
    
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body bgcolor="#f0f0f0">
        <form action="salebill_alter_select.php" method="post">
           TEA'S原味 &nbsp; &nbsp; 銷貨單----查詢修改刪除作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           員工編號&nbsp; &nbsp; &nbsp; &nbsp; <select name="em_id"> 
               <?php
               echo $a;
               ?>
           </select><br/>  
            <input type="submit" name="inquire" onclick="javascript:location.href='salebill_alter_select.php'" value="查詢資料">
            <input type="button" name="back" onclick="javascript:location.href='sale_main.php'" value="返回">
            
        </form>
    </body>
</html>
