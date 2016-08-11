

<?php
    session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}
   require_once './mysql_inc.php';
     $em_id=$_POST['em_id'];    
     $query="SELECT * FROM  `SALE BILL` WHERE em_id='$em_id' ";
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
       echo "TEA'S原味 &nbsp; &nbsp; 銷貨單----查詢結果<br/>";       
      echo '<table width="40%"  border="2" cellspacing="1">';
      echo '<td>銷貨單編號</td><td>員工編號</td><td>日期</td><td>時間</td><td>類別</td></tr>';
        while($cin = mysql_fetch_array($result)) 
        {               
            echo '<td>'.$cin['sb_id'].'</td>'.'<td>'.$cin['em_id'].'</td>'.'<td>'.$cin['sb_date'].'</td>'.'<td>'.$cin['sb_time'].'</td>'
                    .'<td>'.$cin['sb_class'].'</td>'.'</td>'.'<td><input type="button" value="修改" onclick="javascript:location.href=\'salebill_alt.php?sb_id='.$cin['sb_id'].'&em_id='.$cin['em_id'].'&sb_date='.$cin['sb_date'].'&sb_time='.$cin['sb_time'].'&sb_class='.$cin['sb_class'].'\'">'.'</td>'.
                     
                    '<td>'.'<input type="button" value="查詢明細" onclick="javascript:location.href=\'salebill_select_saleledger.php?sb_id='.$cin['sb_id'].'\'">'.'</td>'.'</tr>';
        
        }
        echo '</table>';
        
           
     
        echo ' <input type="button" name="back" value="返回" onclick="javascript:location.href=\'salebill_alter.php\'"><br/>';
        ?>
    </body>
</html>

 

