<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once './mysql_inc.php';
   
    $result=  mysql_query( "select * from `PTemporary`");
    
     $sql2="SELECT `od_id` FROM `ORDER`;";
     $result1 = mysql_query($sql2);
     while($cor = mysql_fetch_array($result1))
     {
     $id=$cor['od_id'];
     }//取進貨單ID
     
     
     while($putin=mysql_fetch_array($result))
        {  
           $sql="UPDATE `RAW MATERIAL` SET `r_quantity`='$putin[rm_q]'+`r_quantity` WHERE (`rm_id`='$putin[t_id]')" ;          
           mysql_query($sql); 
           mysql_query("INSERT INTO `s1100137213`.`PURCHASE` (`od_id`,`rm_id`, `ph_quantity`) VALUES ('$id','$putin[t_id]','$putin[rm_q]')");                              
        }                
     mysql_query("TRUNCATE PTemporary");//清除暫存內容  
     header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/123/order_new.php");
?>
