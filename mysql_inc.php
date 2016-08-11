<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
     $server= "db.mis.kuas.edu.tw";
    $username="s1100137213";
    $password="s1100137213";
    if(!($conn=   mysql_connect($server, $username, $password)))
            die('nonono');
     mysql_query("SET NAMES utf8");
     mysql_select_db("s1100137213") or die("Select DB error");
?>
