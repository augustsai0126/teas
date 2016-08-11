<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=main.php");
}
    
    $em_id = $_GET['em_id'];
    $em_name = $_GET['em_name'];
    $em_phone = $_GET['em_phone'];
    $em_address = $_GET['em_address'];
    $em_sex = $_GET['em_sex'];
      require_once './mysql_inc.php';
      
    if ($em_sex=="男")
   {
       $se="男";
       $sb="女";        
   }
   else 
    {
        $se="女";
        $sb="男";
    }
      
   echo "TEA'S原味 &nbsp; &nbsp; 員工----修改頁面<br/>";    
   
   
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body　bgcolor="#f0f0f0">
        <form method='POST' action="./employee_alt1.php" >
            <table width="50%" height="50" border="2" cellspacing= "5" >
             <tr><td>員工編號</td><td>員工姓名</td><td>員工電話</td><td>員工地址</td><td>員工性別</td><td>修改</td></tr>
             <td><input type="text" name="em_id" value='<?php echo $em_id;?>'></td> <td><input type="text" name="em_name" value='<?php echo $em_name;?>'></td> <td><input type="text" name="em_phone" value='<?php echo $em_phone;?>'> </td> 
             <td><input type="text" name="em_address" size="20" value= '<?php echo $em_address;?> '></td><td><select name="em_sex"><option selected><?php echo $se;?></option> <option><?php echo $sb;?></option></select></td><td><input type="submit" value="修改"></td>
              </tr>  
              
            </table>

            
            
            
            
            
            
            
         </form>
        <input type="button" name="reback"  onclick="javascript:location.href='employee_select.php'" value="返回">
    </body>
</html>