<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    
    $sup_id = $_GET['sup_id'];
    $sup_name = $_GET['sup_name'];
    $sup_phone = $_GET['sup_phone'];
    $sup_address = $_GET['sup_address'];
    
      require_once './mysql_inc.php';
      
   echo "TEA'S原味 &nbsp; &nbsp; 供應商----修改頁面<br/>";    
   
   
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body　bgcolor="#f0f0f0">
        <form method='POST' action="./supplier_alter1.php" >
            <table width="40%" height="50" border="2" cellspacing= "5">
             <tr><td>供應商編號</td><td>供應商名字</td><td>連絡電話</td><td>地址</td><td>修改</td></tr>
             <td><input type="text" name="sup_id" readonly = "readonly" value='<?php echo $sup_id;?>'></td><td><input type="text" name="sup_name" size="8" value= '<?php echo $sup_name;?> '></td> <td><input type="text" name="sup_phone" size="8" value= '<?php echo $sup_phone;?> '></td> 
             <td><input type="text" name="sup_address" size="8" value= '<?php echo $sup_address;?> '></td><td><input type="submit" value="修改"></td>
              </tr>  
            
              
            </table>

            
            
            
            
            
            
            
         </form>
        <input type="button" name="reback"  onclick="javascript:location.href='supplier_create.php'" value="返回">
    </body>
</html>