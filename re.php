<?php
 require_once './mysql_inc.php';
 session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=main.php");
}
$em_id=$_SESSION['user'];
 
$query="SELECT * FROM  `EMPLOYEE` WHERE em_id='$em_id'";
$result = mysql_query($query);
$cursor=  mysql_fetch_array($result);
 
               
     
  if ($cursor['em_sex']=="男")
   {
       $se="男";
       $sb="女";        
   }
   else 
    {
        $se="女";
        $sb="男";
    }   
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>員工資料設定</title>
    </head>
    <body　bgcolor="#f0f0f0">
       <form method='POST' action="./re_alt.php" >
            
           <table width="50%" height="50" border="2" cellspacing= "5" >
             <tr><td>員工編號</td><td>員工姓名</td><td>員工電話</td><td>員工地址</td><td>員工性別</td><td>員工密碼</td></tr>
             <td><input type="text" name="em_id" value='<?php echo $cursor['em_id'];?>'></td> <td><input type="text" name="em_name" value='<?php echo $cursor['em_name'];?>'></td> <td><input type="text" name="em_phone" value='<?php echo $cursor['em_phone'];?>'> </td> 
             <td><input type="text" name="em_address" size="20" value= '<?php echo $cursor['em_address'];?> '></td><td><select name="em_sex"><option selected><?php echo $se;?></option> <option><?php echo $sb;?></option></select></td><td><input type="text" name="em_password" value='<?php echo $cursor['em_password'];?>'></td><td><input type="submit" value="確認修改"></td>
              </tr>  
              
            </table>      
           
    </body>
</html>