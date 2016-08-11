<?php
$cup=$_GET['cup'];
require_once './mysql_inc.php';
$cup;   
    $result = mysql_query("SELECT r_quantity FROM  `RAW MATERIAL` WHERE rm_id='RM0001'");
    $co = mysql_fetch_array($result);
    $new=$co['r_quantity']-$cup;
    $sql="UPDATE `RAW MATERIAL` SET `r_quantity`='$new' WHERE (`rm_id`='RM0001')";
    mysql_query($sql);
    
    if($new<500)
    {
        echo  $msg ="杯子庫存量已低於底線，是否需要補貨?";
         echo ' <input type="button" name="yes" value="是" onclick="javascript:location.href=\'order_new.php\'">';
       echo ' <input type="button" name="no" value="否" onclick="javascript:location.href=\'sale_main.php\'">';
    }
    else
    {header("Location: http://fs.mis.kuas.edu.tw/~s1100137110/123/salebill_new.php");}

    
?>

