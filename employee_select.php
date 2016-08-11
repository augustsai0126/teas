<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}


    require_once './mysql_inc.php';
    
    $result = mysql_query("SELECT em_name FROM  `EMPLOYEE` ");
    $a="";
     while($cursor = mysql_fetch_array($result))
    {
        $a = $a . "<option>" . $cursor['em_name'] . "</option>";
    }
    
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body　bgcolor="#f0f0f0">
        <form action="employee_select1.php" method="post">
           TEA'S原味 &nbsp; &nbsp; 員工----修改刪除查詢作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           員工姓名&nbsp; &nbsp; &nbsp; &nbsp; <select name="em_name"> 
               <?php
               echo $a;
               ?>
           </select><br/>
           <hr>
           
            
       
            <input type="submit" name="inquire"  onclick="javascript:location.href='employee_select1.php'" value="查詢資料">
            <input type="button" name="back"  onclick="javascript:location.href='em_main.php'" value="返回">          
        </form>
    </body>
</html>

