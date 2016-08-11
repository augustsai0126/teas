<?php
session_start();
if($_SESSION['user']=="")
{
    header("refresh:0;URL=login.html");
}

?>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Blueprint: Nested Accordion</title>
		<meta name="description" content="Blueprint: Nested Accordion" />
		<meta name="keywords" content="nested, accordion, simple, vertical, web development, css3, javascript" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
    </head>
    <body bgcolor="#f0f0f0">
       　　　　　　　　　　　　　　<h3 class="cbp-nttrigger">歡迎使用TEA'S原味後台系統</h3>
						<div class="cbp-ntcontent">
							<p><<員工管理請以店長帳號登入>></p>
                                                        <P>　　　本月暢銷商品</P>
							<ul class="cbp-ntsubaccordion">
								<li>
									<h4 class="cbp-nttrigger">梅子綠茶</h4>				
								</li>
								<li>
									<h4 class="cbp-nttrigger">珍珠奶茶</h4>									
								</li>
								<li>
									<h4 class="cbp-nttrigger">養樂多綠茶</h4>									
								</li>
							</ul>
						</div>
    </body>
</html>
