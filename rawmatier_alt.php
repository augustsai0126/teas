<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    $rm_id = $_GET['rm_id'];
    $rm_name = $_GET['rm_name'];
    $sup_name = $_GET['sup_name'];
    $rm_cost = $_GET['rm_cost'];
    
      require_once './mysql_inc.php';
      
   echo "TEA'S原味 &nbsp; &nbsp; 原料----修改頁面<br/>";    
   
   
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor="#f0f0f0">
        <form method='POST' action="./rawmatier_alt1.php" >
            <table width="40%" height="50" border="2" cellspacing= "5" >
             <tr><td>原料編號</td><td>原料名稱</td><td>供應商名稱</td><td>成本</td><td>修改</td></tr>
             <td><input type="text" name="rm_id" readonly = "readonly" value='<?php echo $rm_id;?>'></td> <td><?php echo $rm_name;?></td> <td><?php echo $sup_name;?> </td> 
             <td><input type="text" name="rm_cost" size="8" value= '<?php echo $rm_cost;?> '></td><td><input type="submit" value="修改"></td>
              </tr>  
              
            </table>

            
            
            
            
            
            
            
         </form>
        <input type="button" name="reback"  onclick="javascript:location.href='rawmatier_create.php'" value="返回">
    </body>
</html>