<?php
    $gd_id = $_POST['gd_id'];//收到商品的ID
    $gd_q = $_POST['gd_q']; 
    $sb_id=$_POST['sb_id'];
    require_once './mysql_inc.php';
    
        $result=mysql_query("SELECT * FROM GOODS WHERE gd_id='$gd_id'"); //顯示剛剛收到編號(商品的資料)
        $put=mysql_fetch_array($result);
       
        
        if($gd_id!=NULL && $gd_q!=NULL)
        {    
         mysql_query("INSERT INTO `s1100137213`.`Temporary` (`t_id`,`gd_name`, `gd_q`) VALUES ('$put[gd_id]','$put[gd_name]','$gd_q')");      
        }
        
        

    
   
     
    
    header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/123/saleledger_new.php?sb_id=$sb_id");

 
?>
