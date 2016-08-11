<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
    require_once './mysql_inc.php';
    $sup_name=$_POST['sup_name'];
    
 
     $query="SELECT * FROM  `SUPPLIER` WHERE sup_name='$sup_name' ";
     $result=  mysql_query($query);
     if(!$result)die('NO record is found');
     
     
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>.
       <?php
         echo "TEA'S原味 &nbsp; &nbsp; 供應商----查詢結果<br/>";       
      echo '<table width="60%"  border="2" cellspacing="1">';
      echo '<td>供應商編號</td><td>供應商名字</td> <td>連絡電話</td> <td>地址</td> <td>修改</td> <td>刪除</td> </tr>';
        while($cin = mysql_fetch_array($result)) 
        {               
            echo '<td>'.$cin['sup_id'].'</td>'.'<td>'.$cin['sup_name'].'</td>'.'<td>'.$cin['sup_phone'].'</td>'.'<td>'.$cin['sup_address'].'</td>'
                    .'<td><input type="button" value="修改" onclick="javascript:location.href=\'supplier_alter.php?sup_id='.$cin['sup_id'].'&sup_name='.$cin['sup_name'].'&sup_phone='.$cin['sup_phone'].'&sup_address='.$cin['sup_address'].'\'">'.'</td>'.
                     '<td><input type="button" value="刪除" onclick="javascript:location.href=\'supplier_delete.php?sup_id='.$cin['sup_id'].'\'">'.'</td>'.'</tr>';
        
        }
        echo '</table>';
    
     
      echo ' <input type="button" name="back" value="返回"  onclick="javascript:location.href=\'supplier_select.php\'"><br/>';
      
       ?>
    </body>
</html>

 

