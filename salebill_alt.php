<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    
    $sb_id = $_GET['sb_id'];
    $em_id = $_GET['em_id'];
    $sb_date = $_GET['sb_date'];
    $sb_time = $_GET['sb_time'];
    $sb_class = $_GET['sb_class'];
      require_once './mysql_inc.php';
      
   echo "TEA'S原味 &nbsp; &nbsp; 銷貨單----修改頁面<br/>";    
  
   if ($sb_class=="現場")
   {
       $se="現場";
       $sb="外送";        
   }
   else 
    {
        $se="外送";
        $sb="現場";
    }
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body　bgcolor="#f0f0f0">
        <form method='POST' action="./salebill_alt_1.php" >
            <table width="60%" height="50" border="2"  >
             <tr><td>銷貨單編號</td><td>員工編號</td><td>日期</td><td>時間</td><td>類別</td><td>修改</td></tr>
             <td><input type="text" name="sb_id" readonly = "readonly" value='<?php echo $sb_id;?>'></td> <td><?php echo $em_id;?></td> <td> <input type="date" name="sb_date" size="8" value='<?php echo $sb_date;?>'></td> 
             <td> <input type="time" name="sb_time" size="8" value='<?php echo $sb_time;?>'> </td> <td><select name="sb_class"><option selected><?php echo $se;?></option> <option><?php echo $sb;?></option></select></td><td><input type="submit" value="修改"></td>
              </tr>  
            </table>
         </form>
        <input type="button" name="reback"  onclick="javascript:location.href='salebill_alter.php'" value="返回">
    </body>
</html>