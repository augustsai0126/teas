<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    session_start();
    if($_SESSION['user']=="")
        {
            header("refresh:0;URL=login.html");
        }
   
    require_once './mysql_inc.php';
        
        $sql="SELECT rm_id,rm_name,r_quantity FROM `RAW MATERIAL`";
        $result=  mysql_query($sql);
        if(!$result)die('NO record is found');
        
    /*echo "TEA'S原味 &nbsp; &nbsp; 原料庫存----查詢結果<br/>";
    echo '<form action="raw_stock_alter.php" method="POST">';
    echo '<table width="40%"  border="2" cellspacing="1">';
    echo '<td>原料名稱</td><td>庫存數量</td><td>盤點後數量</td><td></td></tr>';
        
     while($cin = mysql_fetch_array($result)) 
        {               
            echo '<td>'.$cin['rm_name'].'</td>'.'<td>'.$cin['r_quantity'].'</td>'.'<td>'.'<input type="text" name="new_q">'.'</td>'.'<td>'.'<input type="submit" value="修改".\'">'.'</td>'.'</tr>';
            echo '<input type="text" name="rm_id" hidden="true" value="$cin[rm_id]">';
        }
      //onclick="javascript:location.href=\'raw_stock_alter.php?rm_id='.$cin['rm_id'].
     echo '</table>';
     echo '</form>';
     echo ' <input type="button" name="back" value="返回" onclick="javascript:location.href=\'raw_main.php\'"><br/>'; */
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor="#f0f0f0">
        <h2>存貨盤點</h2>
        
            
                <table width="40%"  border="2">
        <?php
        
   
       
                   
                   
        $sql="SELECT rm_id,rm_name,r_quantity FROM `RAW MATERIAL`";
        $result=  mysql_query($sql);
        if(!$result)die('NO record is found');
        
         echo "TEA'S原味 &nbsp; &nbsp; 原料庫存----查詢結果<br/>";
        
         //echo '<table width="40%"  border="2" cellspacing="1">';
         echo '<td>原料名稱</td><td>庫存數量</td><td>盤點後數量</td><td></td></tr>';
        $msg="";
        while($cin = mysql_fetch_array($result)) 
        {    
            $msg.="<form action=raw_stock_alter.php method=POST>";
            $msg.='<input type=text name=rm_id value='.$cin['rm_id'].' hidden=true>';
            $msg.='<td>'.$cin['rm_name'].'</td>'.'<td>'.$cin['r_quantity'].'</td>'.'<td>'.'<input type="text" name="new_q"/>'.'</td>'.'<td>'.'<input type="submit" value="修改"/>'.'</td>'.'</tr>';
           // echo '<td>'.$cin['rm_name'].'</td>'.'<td>'.$cin['r_quantity'].'</td>'.'<td>'.'<input type="text" name="new_q">'.'</td>'.'<td>'.'<input type="submit" value="修改".\'">'.'</td>'.'</tr>';
            $msg.= "</form>";

        }
      //onclick="javascript:location.href=\'raw_stock_alter.php?rm_id='.$cin['rm_id'].
       
        echo $msg;
        echo ' <input type="button" name="back" value="返回" onclick="javascript:location.href=\'raw_main.php\'">';
                    
                   
        ?>
               </table>
                
    </body>
</html>