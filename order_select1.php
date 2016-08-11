<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
   require_once './mysql_inc.php';
    $em_id=$_GET['em_id'];    
 
     $query="SELECT * FROM  `ORDER` WHERE em_id='$em_id' ";
     $result=mysql_query($query);
     if(!$result)die('NO record is found');
    
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          echo "TEA'S原味 &nbsp; &nbsp; 進貨單----查詢結果<br/>";       
      echo '<table width="40%"  border="2" cellspacing="1">';
      echo '<td>進貨單編號</td><td>員工編號</td><td>日期</td><td>時間</td></tr>';
        while($cin = mysql_fetch_array($result)) 
        {               
            echo '<td>'.$cin['od_id'].'</td>'.'<td>'.$cin['em_id'].'</td>'.'<td>'.$cin['od_date'].'</td>'.'<td>'.$cin['od_time'].'</td>'
                    .'</td>'.'<td><input type="button" value="修改" onclick="javascript:location.href=\'order_alt.php?od_id='.$cin['od_id'].'&em_id='.$cin['em_id'].'&od_date='.$cin['od_date'].'&od_time='.$cin['od_time'].'\'">'.'</td>'.
                     '<td>'.
                    '<input type="button" value="查詢明細" onclick="javascript:location.href=\'order_select_purchase.php?od_id='.$cin['od_id'].'\'">'.'</td>'.'</tr>';
        
        }
        echo '</table>';
        
          echo ' <input type="button" name="back" value="返回" onclick="javascript:location.href=\'order_select.php\'"><br/>';
        ?>
       
    </body>
</html>

 

