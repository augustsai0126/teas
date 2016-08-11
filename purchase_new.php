<?php

    require_once './mysql_inc.php';
    $od_id=$_GET['od_id'];
      
    $result_3 = mysql_query("SELECT  rm_name,rm_id FROM  `RAW MATERIAL` ");
    $b="";
     while($cursor_3 = mysql_fetch_array($result_3))
    {
        $b = $b . "<option value=".$cursor_3['rm_id'].">" . $cursor_3['rm_name'] . "</option>";
    }
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <form action="purchase_new2.php" method="POST">
           TEA'S原味 &nbsp; &nbsp; 進貨單 >> 進貨明細----建立作業<br/>
           
           項目         &nbsp;   &nbsp; &nbsp;   &nbsp;   &nbsp; &nbsp;  &nbsp; &nbsp;   內容<br/>
           <hr>
           進貨單編號&nbsp; &nbsp; &nbsp; &nbsp; 
               <?php echo $od_id; ?>
           <br/>
           <hr>
           
                  
           原料名稱&nbsp; &nbsp; &nbsp; &nbsp; <select name="rm_id"> 
               <?php
               echo $b;
               ?>
           </select><br/>
           
           數量&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <input type="text" name="ph_q"/><br/>
           <hr>           
            <input type="submit" name="next" value="新增"/>
        </form>
        <table width="30%"  border="1" cellspacing="1">
            <tr><td>原料</td><td>數量</td><td>原料編號</td><td></td></tr>
           <?php 
           $result= mysql_query("SELECT * FROM  `PTemporary` "); //從Temporary資料表取原料名跟數量
           while($con = mysql_fetch_array($result)) 
    {               
            echo '<tr><td>'.$con['rm_name'].'</td><td>'.$con['rm_q'].'</td><td>'.$con['t_id'].'</td><td>'
            .'<input type="button" value="刪除" onclick="javascript:location.href=\'purchase_delete.php?t_id='.$con['t_id'].'&od_id='.$od_id.'\'">'.'</td>'.'</tr>';
    }
           ?>
        </table>
        <?php
        echo '<input type="submit" value="確定送出" onclick="javascript:location.href=\'purchase_sure.php\'" >';     
         ?>
    </body>
</html>

