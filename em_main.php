<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=main.php");
}
if(substr($_SESSION['user'],0,1)=="B")
{
    header("refresh:0;URL=noem_main.php");
}
?>
    <head>
        <style type="text/css">
.btn {
	border: none;
	font-family: inherit;
	font-size: medium;
	color: inherit;
	background: none;
	cursor: pointer;
	padding: 25px 80px;
	display: inline-block;
	margin: 15px 30px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 400;
	outline: none;
	position: relative;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

.btn:after {
	content: '';
	position: absolute;
	z-index: -1;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}
.btn-2 {
	background: #47a3da;
	color: #fff;
	box-shadow: 0 6px #0033FF;
	-webkit-transition: none;
	-moz-transition: none;
	transition: none;
}
.btn-2c {
	border-radius: 5px;
}

.btn-2c:hover {
	box-shadow: 0 4px #0033FF;
	top: 2px;
}

.btn-2c:active {
	box-shadow: 0 0 #0033FF;
	top: 6px;
}
</style>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    
     <body bgcolor="#f0f0f0">
        <p align="center">
     　　 <p align="center">
            <p align="center">
     　　 <p align="center">
        
        <p align="center">
     　　 <p align="center">
           <p align="center">
         <p align="center">　</p>     
         <form name="groovyform">
         <p align="center">    
         <font face="微軟正黑體" size="8">            
         <input type="button" name="groovybtn1" class="btn btn-2 btn-2c" value="員工新增" onclick="javascript:location.href='employee_create.php';"/>
         <input type="button" name="groovybtn1" class="btn btn-2 btn-2c" value="員工修改刪除查詢" onclick="javascript:location.href='employee_select.php';"/>       
         </font>
         </p>
         </form>
          
    </body>
</html>