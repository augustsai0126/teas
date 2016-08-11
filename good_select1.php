<?php


require_once './mysql_inc.php';
$gd_name=$_POST['gd_name'];


$query="SELECT * FROM  `GOODS` WHERE gd_name='$gd_name' ";
$result= mysql_query($query);
if(!$result)die('no result found');




?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>.
       <?php
       echo "TEA'S原味 &nbsp; &nbsp; &nbsp; &nbsp; 商品表------修改刪除作業<br/>";
echo '<table width=40% border=2 cellspacing=1 >';
echo '<td>商品編號</td><td>名稱</td><td>價格</td><td>修改</td><td>刪除</td></tr>';
while ($cin=  mysql_fetch_array($result))
        {               
            echo '<td>'.$cin['gd_id'].'</td>'.'<td>'.$cin['gd_name'].'</td>'.'<td>'.$cin['gd_price'].'</td>'
                    .'<td><input type="button" value="修改" onclick="javascript:location.href=\'good_alter.php?gd_id='.$cin['gd_id'].'&gd_name='.$cin['gd_name'].'&gd_price='.$cin['gd_price'].'\'">.</td>'.
                     '<td><input type="button" value="刪除" onclick="javascript:location.href=\'good_delete.php?gd_id='.$cin['gd_id'].'\'">'.'</td>'.'</tr>';
        
        }
echo '</table>';



echo ' <input type="button" name="back" value="返回" 
            onclick="javascript:location.href=\'good_select.php\'"><br/>';
       ?>
    </body>
</html>