<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    require_once './mysql_inc.php';
    $result = mysql_query("SELECT  sup_name FROM  `SUPPLIER` ");
    $a="";
     while($cursor = mysql_fetch_array($result))
    {
        $a = $a . "<option>" . $cursor['sup_name'] . "</option>";
    }//取供應商名字
    
    $abc = mysql_query("SELECT rm_id FROM  `RAW MATERIAL` ");
    $b="";
     while($cursor1 = mysql_fetch_array($abc))
    {
        $b=$cursor1['rm_id'] ;
    }//取原料編號最後一個
   
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body bgcolor="#f0f0f0">
       <form action="rawmatier_create1.php" method="POST">
           TEA'S原味 &nbsp; &nbsp; &nbsp; &nbsp; 原料------新增作業<br/>
           
           項目&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   內容
           <br/><hr>
           
           原料編號&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="rm_id" value=""/>
           <br/><hr>  
           
           名稱&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="rm_name"/>
           <br/><hr>
           
           成本&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="rm_cost"/>
           <br/><hr>
           
           供應商名字&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <select name="sup_name"> 
               <?php
               echo $a;
               ?>
           </select>
           <br/><hr>  

            <input type="submit" name="create" value="確定新增"/>
            <input type="button" name="back"  onclick="javascript:location.href='raw_main.php'" value="返回">
        </form>
    </body>
</html>