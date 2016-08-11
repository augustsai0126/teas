<?php

    require_once './mysql_inc.php';
    $sb_id=$_GET['sb_id'];
      
    $result_3 = mysql_query("SELECT  gd_name,gd_id FROM  `GOODS` ");
    $b="";
     while($cursor_3 = mysql_fetch_array($result_3))
    {
        $b = $b . "<option value=".$cursor_3['gd_id'].">" . $cursor_3['gd_name'] . "</option>";
    }
    
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body bgcolor="#f0f0f0">
       <form action="saleledger_new2.php" method="POST">
           TEA'S原味 &nbsp; &nbsp; 銷貨單 >> 銷貨明細----建立作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           銷貨單編號&nbsp; &nbsp; &nbsp; &nbsp; 
               <?php echo $sb_id; ?>
           <br/>
           <hr>                         
           商品名稱&nbsp; &nbsp; &nbsp; &nbsp; <select name="gd_id"> 
               <?php
               echo $b;
               ?>
           </select><br/>
           
           數量&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="gd_q"/><br/>
           <hr> 
          　<input type="hidden" name="sb_id" value="<?php echo$sb_id?>" />
            <input type="submit" name="next" value="新增"/>
        </form>
        <table width="30%"  border="1" cellspacing="1">
            <tr><td>商品</td><td>數量</td><td></td></tr>
           <?php 
           $result= mysql_query("SELECT * FROM  `Temporary` "); //從Temporary資料表取商品名跟數量
           while($con = mysql_fetch_array($result)) 
    {               
            echo '<tr><td>'.$con['gd_name'].'</td><td>'.$con['gd_q'].'</td><td>'
            .'<input type="button" value="刪除" onclick="javascript:location.href=\'saleledger_delete.php?x='.$con['t_id'].'&y='.$sb_id.'\'">'.'</td>'.'</tr>';
    }
           ?>
        </table>
        <?php
        echo '<input type="submit" value="確定送出" onclick="javascript:location.href=\'saleledger_sure.php\'" >';     
         ?>
    </body>
</html>

