<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    
    require_once './mysql_inc.php';
    $em_name=$_POST['em_name'];
    
 
     $query="SELECT * FROM  `EMPLOYEE` WHERE em_name='$em_name' ";
     $result=  mysql_query($query);
     if(!$result)die('NO record is found');
     
     
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body　bgcolor="#f0f0f0">.
       <?php
         echo "TEA'S原味 &nbsp; &nbsp; 員工----查詢結果<br/>";       
      echo '<table width="60%"  border="2" cellspacing="1">';
      echo '<td>員工編號</td><td>員工姓名</td> <td>員工電話</td> <td>員工地址</td><td>員工性別</td> <td>修改</td> <td>刪除</td> </tr>';
        while($cin = mysql_fetch_array($result)) 
        {               
            echo '<td>'.$cin['em_id'].'</td>'.'<td>'.$cin['em_name'].'</td>'.'<td>'.$cin['em_phone'].'</td>'.'<td>'.$cin['em_address'].'</td>'.'<td>'.$cin['em_sex'].'</td>'
                    .'<td><input type="button" value="修改" onclick="javascript:location.href=\'employee_alt.php?em_id='.$cin['em_id'].'&em_name='.$cin['em_name'].'&em_phone='.$cin['em_phone'].'&em_address='.$cin['em_address'].'&em_sex='.$cin['em_sex'].'\'">'.'</td>'.
                     '<td><input type="button" value="刪除" onclick="javascript:location.href=\'employee_delete.php?em_id='.$cin['em_id'].'\'">'.'</td>'.'</tr>';
        
        }
        echo '</table>';
    
     
      echo ' <input type="button" name="back" value="返回"  onclick="javascript:location.href=\'employee_select.php\'"><br/>';
      
       ?>
    </body>
</html>

 

