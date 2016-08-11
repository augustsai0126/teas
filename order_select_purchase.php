<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
   
    require_once './mysql_inc.php';
     
     $od_id=$_GET['od_id'];
     echo $od_id;
     $query="SELECT od_id,rm_name,ph_quantity FROM  `PURCHASE` P,`RAW MATERIAL` R WHERE od_id='$od_id' AND P.rm_id=R.rm_id ";
    
     $result=  mysql_query($query);     
     if(!$result)die('NO record is found');
     
    
     
     echo "TEA'S原味 &nbsp; &nbsp; 進貨明細----查詢結果<br/>";       
     echo '<table width="40%"  border="2" cellspacing="1">';
     echo '<td>進貨單編號</td><td>原料名稱</td><td>數量</td></tr>';
        
     
     
     while($cin = mysql_fetch_array($result)) 
        {               
            echo '<td>'.$cin['od_id'].'</td>'.'<td>'.$cin['rm_name'].'</td>'.'<td>'.$cin['ph_quantity'].'</td>'.'</tr>';
        
        }
     
     echo '</table>';
        
           
    
     echo ' <input type="button" name="back" value="返回" onclick="javascript:location.href=\'order_select.php\'"><br/>';
  
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
    </body>
</html>

 

