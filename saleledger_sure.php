<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once './mysql_inc.php';
   
    $result=mysql_query( "select t_id,gd_q from `Temporary`");
     $sql2="SELECT `sb_id` FROM `SALE BILL`;";
     $result1 = mysql_query($sql2);
     while($cor = mysql_fetch_array($result1))
     {
     $id=$cor['sb_id'];
     }//取銷貨單ID
     
     //$r=mysql_query("SELECT SUM(gd_q) FROM `Temporary`");
     $r=mysql_query("SELECT gd_q FROM `Temporary`");
     $sum=0;
     while($co = mysql_fetch_array($r))
     {
     $sum+=$co['gd_q'];
     }
     
     while($putin=mysql_fetch_array($result))
        {   
            
            mysql_query("INSERT INTO `s1100137213`.`SALE LEDGER` (`sb_id`,`gd_id`, `sl_quantity`) VALUES ('$id','$putin[t_id]','$putin[gd_q]')");
           
        }
       
      
     mysql_query("TRUNCATE Temporary");//清除暫存內容
     header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/123/cup.php?cup=$sum"); 
?>
