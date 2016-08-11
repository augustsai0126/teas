<?php
    $t_id = $_GET['t_id'];
    $od_id = $_GET['od_id'];
    
    echo $t_id;
    echo $od_id;
    require_once './mysql_inc.php';
    
    
    $sql = "DELETE FROM  `PTemporary` WHERE `t_id`='$t_id'";
    $result = mysql_query($sql);
    
    //DELETE FROM `PTemporary` WHERE (`t_id`='RM0002')
     
        
                      
    header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/123/purchase_new.php?od_id=$od_id");
    exit;
           
       
?>
