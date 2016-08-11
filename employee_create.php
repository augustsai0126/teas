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
       <form action="employee_create1.php" method="POST">
           TEA'S原味 &nbsp; &nbsp; 員工資料表----建立作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           員工編號&nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="em_id"/>範例:(B+本人手機) B0912345678<br/>
           <hr>
           姓名&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="em_name"/><br/>
           <hr>
           電話&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="em_phone"/><br/>
           <hr>
           地址&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="em_address"/><br/>
           <hr>
           性別&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="radio" name="em_sex" value="男"/>男
            <input type="radio" name="em_sex" value="女"/>女<br/>
           <hr>        
           密碼&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="em_password"/><br/>
           <hr>
           
            <input type="radio" name="em_class" value="店長"/>店長
            <input type="radio" name="em_class" value="計時"/>計時<br/>
            <input type="submit" name="inquire" onclick="javascript:location.href='salebill_new.php'" value="確認新增">
            <input type="button" name="back"  onclick="javascript:location.href='em_main.php'" value="返回">
        </form>
    </body>
</html>