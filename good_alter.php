<?php
    
    
    $gd_id = $_GET['gd_id'];
    $gd_name = $_GET['gd_name'];
    $gd_price = $_GET['gd_price'];
        
      require_once './mysql_inc.php';
      
   echo "TEA'S原味 &nbsp; &nbsp; 商品----修改頁面<br/>";    
   
   
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body　bgcolor="#f0f0f0">
        <form method='POST' action="./good_alter1.php" >
            <table width="40%" height="50" border="2" cellspacing= "5" ">
             <tr><td>商品編號</td><td>名稱</td><td>商品價格</td><td>修改</td></tr>
             <td><input type="text" name="gd_id" readonly = "readonly" value='<?php echo $gd_id;?>'><td><input type="text" name="gd_name" size="8" value= '<?php echo $gd_name;?> '></td> <td><input type="text" name="gd_price" size="8" value= '<?php echo $gd_price;?> '></td> 
             <td><input type="submit" value="修改"></td>
              </tr>  
            
              
            </table>

            
            
            
            
            
            
            
         </form>
        <input type="button" name="reback"  onclick="javascript:location.href='good_select.php'" value="返回">
    </body>
</html>