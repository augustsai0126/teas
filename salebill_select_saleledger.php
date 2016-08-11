<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
   
    require_once './mysql_inc.php';
     
     $sb_id=$_GET['sb_id'];    
     $query="SELECT sb_id,gd_name,sl_quantity FROM  `SALE LEDGER` S,`GOODS` G WHERE sb_id='$sb_id' AND S.gd_id=G.gd_id";
    // $query="SELECT rm_id,rm_name,sup_name,rm_cost FROM  `RAW MATERIAL` R, `SUPPLIER` S WHERE rm_name='$rm_name' AND R.sup_id=S.sup_id";
     $result=  mysql_query($query);     
     if(!$result)die('NO record is found');
     
     
 
     
     
   
  
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body　bgcolor="#f0f0f0">
        <?PHP
          echo "TEA'S原味 &nbsp; &nbsp; 銷貨明細----查詢結果<br/>";       
     echo '<table width="40%"  border="2" cellspacing="1">';
     echo '<td>銷貨單編號</td><td>商品名稱</td><td>數量</td></tr>';
        
     
     
     while($cin = mysql_fetch_array($result)) 
        {               
            echo '<td>'.$cin['sb_id'].'</td>'.'<td>'.$cin['gd_name'].'</td>'.'<td>'.$cin['sl_quantity'].'</td>'.'</tr>';
        
        }
     
     echo '</table>';
        
           
     
     echo ' <input type="button" name="back" value="返回" onclick="javascript:location.href=\'salebill_alter.php\'"><br/>';
        ?>
    </body>
</html>

 

