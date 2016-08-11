<?php
    $t_id = $_GET['x'];
    $sb_id = $_GET['y'];
    
    require_once './mysql_inc.php';
    
    $sql =("DELETE FROM  `Temporary` WHERE `t_id`='$t_id'");
    $result = mysql_query($sql);
        
    
                      
    header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/123/saleledger_new.php?sb_id=$sb_id");
    exit;
           
       
?>
