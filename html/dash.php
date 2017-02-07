<!DOCTYPE html>
<html>
<head>
<title>Solr - Dashboard</title>
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
		window.scrollTo(0,1); 
	} 
</script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
</head>
<body>
<div class="container">
	<div class="main">
	<!--header-->
		<div class="header shadow">
			<div class="titlespace">
				<a href="/" class="go nodecor logospace">
				</a>
				<h3 class="whitetxt">&nbsp;Solar power for everyone</h3>
				<div class="clearfix"></div>
			</div>
			
			<div class="header-top">
				<div class="top-nav">
					<ul class="floatright">
						<li><a href="/">HOME</a></li>
						<li><a href="products.php" >PRODUCTS</a></li>
						<li class="active"><a href="#" >DASHBOARD</a></li>
					</ul>
				</div>
			</div>

			<div class="header-bottom">	
				<div class="top-nav">
					<span class="menu-in"><img src="images/go.png" alt=""> </span>
					<ul >
						<li><a href="/">HOME</a></li>
						<li><a href="products.php" >PRODUCTS</a></li>
						<li class="active"><li><a href="#" >DASHBOARD</a></li>
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

			<div class="col-md-2">
				<div class="shadow blue fixpad">
					<h3>Dashboard</h3>
					<ul class="normal">
						<li><a href="#stat0">Statistics</a></li>
						<li><a href="#stat1">Generated Power</a></li>
					</ul>
				</div>	
			</div>
			
			<div class="col-md-10 men-grid-in fixpad">
				<div class="red shadow min350"> 
					<h2 id="stat0">Solr statistics</h2>
					
					<?php
					
					?>		
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
		<!--//top-->

		<!--middle-->
		<div class="content-middle">

			<div class="col-md-2 bottom-at">
				<div class="">
					
				</div>	
			</div>
			
			<div class="col-md-10 ">
				<div class="green shadow min350"> 
					<h2 id="stat1">Solr power generated</h2>
					<canvas class="stats" id="stats0"></canvas>
					<?php
					
					?>	
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>

		<!--//middle-->

		<!--bottom
		<div class="content-bottom">
			<div class="col-md-2 bottom-at">
				<div class="">
					
				</div>	
			</div>
			
			<div class="col-md-10 ">
				<div class="blue shadow min350"> 
					<h2 id="stat2">Solr Statistic 2</h2>
					<canvas class="stats" width="800" height="500"id="stats2"></canvas>
					<?php
					
					?>	
				</div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
				
		<!--//-->
		<p class="footer-class">
			© 2017 Solr | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</p>
		<script src="js/chart.min.js"></script>
		<script src="js/main.js"></script>
	</div>
</div>
</body>
</html>
