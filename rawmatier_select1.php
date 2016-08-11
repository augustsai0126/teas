<?php
   session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
} 
   require_once './mysql_inc.php';
    $rm_name=$_POST['rm_name'];
    
 
     $query="SELECT rm_id,rm_name,sup_name,rm_cost FROM  `RAW MATERIAL` R, `SUPPLIER` S WHERE rm_name='$rm_name' AND R.sup_id=S.sup_id";
     $result=  mysql_query($query);
     if(!$result)die('NO record is found');
     
     
      
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor="#f0f0f0">
       <?php
       echo "TEA'S原味 &nbsp; &nbsp; 原料----查詢結果<br/>";       
      echo '<table width="60%"  border="2" cellspacing="1">';
      echo '<td>原料編號</td><td>原料名稱</td><td>供應商名稱</td><td>成本</td><td>修改</td><td>刪除</td></tr>';
        while($cin = mysql_fetch_array($result)) 
        {               
            echo '<td>'.$cin['rm_id'].'</td>'.'<td>'.$cin['rm_name'].'</td>'.'<td>'.$cin['sup_name'].'</td>'.'<td>'.$cin['rm_cost'].'</td>'
                    .'</td>'.'<td><input type="button" value="修改" onclick="javascript:location.href=\'rawmatier_alt.php?rm_id='.$cin['rm_id'].'&rm_name='.$cin['rm_name'].'&sup_name='.$cin['sup_name'].'&rm_cost='.$cin['rm_cost'].'\'">'.'</td>'.
                     '<td>'.'<input type="button" value="刪除" onclick="javascript:location.href=\'rawmatier_delete.php?rm_id='.$cin['rm_id'].'\'">'.'</td>'.'</tr>';
        
        }
        echo '</table>';
      
     
      echo ' <input type="button" name="back" value="返回"    onclick="javascript:location.href=\'rawmatier_select.php\'"><br/>';
       ?>
    </body>
</html>

 

