<!DOCTYPE html>
<html>
<head>
<title>Solr - Products</title>
<meta name="theme-color" content="#3f51b5">
<link rel="icon" type="image/png" href="images/icon.png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content="" />
<script type="application/x-javascript"> 
	addEventListener(
		"load", 
		function() { setTimeout(hideURLbar, 0); },
		false
		); 
	function hideURLbar(){ 
		//window.scrollTo(0,1); 
	} 
</script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
<!--Calender -->
 <script src="js/site.js"></script>
</head>
<body>
<div class="container">
	<div class="main">
	<!--header-->
		<div class="header shadow">
			<div class="titlespace">
				<a href="#" class="go nodecor logospace">
				</a>
				<h3 class="whitetxt">&nbsp;Solar power for everyone</h3>
				<div class="clearfix"></div>
			</div>

			<div class="header-top">
				
				<div class="top-nav">
					<ul class="floatright">
						<li><a href="/">HOME</a></li>
						<li class="active"><a href="#" >PRODUCTS</a></li>
						<li><a href="dash.php" >DASHBOARD</a></li>
					</ul>
				</div>
			</div>

			<div class="header-bottom">
				
			<div class="top-nav">
					<span class="menu-in"><img src="images/go.png" alt=""> </span>
					<ul >
						<li><a href="/">HOME</a></li>
						<li class="active"><a href="#" >PRODUCTS</a></li>
						<li><a href="dash.php" >DASHBOARD</a></li>
					</ul>
					
					<script>
						$("span.menu-in").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
				</div>
				
			</div>
			<div class="clearfix"> 
			<?php
					
	
			
			?>
			</div>		
		</div>

		<!--top-->
		<div class="content-top">
		
			<div class="col-md-4 bottom-at">
				<div class="sunshine shadow min350">
					
				</div>	
			</div>
			
			<div class="col-md-8 ">
				<div class="red shadow min350"> 
					<h2 id="roof">Solr roof</h2>
					<ul class="normal big">
						<li>Roof explanation</li>
					</ul>
				</div>
			</div>
			
			<div class="clearfix"> </div>
			
		</div>
		<!--//top-->

		<!--middle-->
		<div class="content-middle">
			<div class="col-md-8">
				<div class="green shadow min350"> 
					<h2 id="window">Solr window</h2>
					<ul class="normal big">
						<li>Window explanation</li>
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<div class="sunshine shadow min350">
					
				</div>	
			</div>

			<div class="clearfix"> </div>
			
		</div>

		<!--//middle-->

		<!--bottom-->
		<div class="content-bottom">
		
			<div class="col-md-4 bottom-at">
				<div class="sunshine shadow min350">
					
				</div>	
			</div>
			
			<div class="col-md-8 ">
				<div class="blue shadow min350"> 
					<h2 id="extern">Solr extern</h2>
					<ul class="normal big">
						<li>Extern explanation</li>
					</ul>
				</div>
			</div>
			
			<div class="clearfix"> </div>
			
		</div>	
		<!--//-->
		<p class="footer-class">
			© 2017 Solr | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</p>
	</div>
</div>
</body>
</html>
