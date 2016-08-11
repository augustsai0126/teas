<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    
    
    $od_id = $_GET['od_id'];
    $em_id = $_GET['em_id'];
    $od_date = $_GET['od_date'];
    $od_time = $_GET['od_time'];
    
      require_once './mysql_inc.php';
      
   echo "TEA'S原味 &nbsp; &nbsp; 進貨單----修改頁面<br/>";    
   
   
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body　bgcolor="#f0f0f0">
        <form method='POST' action="./order_alter1.php" >
            <table width="60%" height="50" border="2"  >
             <tr><td>進貨單編號</td><td>員工編號</td><td>日期</td><td>時間</td><td>修改</td></tr>
             <td><input type="text" name="od_id" readonly = "readonly" value='<?php echo $od_id;?>'></td> <td><?php echo $em_id;?> </td> <td><input type="date" name="od_date" size="8" value='<?php echo $od_date;?>'></td> 
             <td><input type="time" name="od_time" size="8" value='<?php echo $od_time;?>'></td><td><input type="submit" value="修改"></td>
            </table>        
         </form>      
        <?php     
       echo ' <input type="button" name="back" value="返回" onclick="javascript:location.href=\'order_select1.php?em_id='.$em_id.'\'">'
        ?>    
    </body>
</html>