<?php
    $rm_id = $_POST['rm_id'];//收到原料的ID
    $rm_q = $_POST['ph_q'];    
    require_once './mysql_inc.php';
    echo $rm_id;
        $result=mysql_query("SELECT * FROM `RAW MATERIAL` WHERE `rm_id`='$rm_id'"); //顯示剛剛收到編號(原料的資料)
        $put=mysql_fetch_array($result);
    
       
        
        if($rm_id!=NULL && $rm_q!=NULL)
        {    
         mysql_query("INSERT INTO `s1100137213`.`PTemporary` (`t_id`,`rm_name`, `rm_q`) VALUES ('$put[rm_id]','$put[rm_name]','$rm_q')");
        }
        //Temporary只是暫存資料庫 欄位名字不重要
        

    
     $sql2="SELECT `od_id` FROM `ORDER`;";
     $result1 = mysql_query($sql2);
     while($cor = mysql_fetch_array($result1))
     {
     $od_id=$cor['od_id'];
     }//取進貨單ID
     
    
    header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/DB/purchase_new.php?od_id=$od_id");

 
?>