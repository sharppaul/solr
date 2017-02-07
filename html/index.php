<!DOCTYPE html>
<html>
<head>
<title>Solr - Home</title>
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
				<a href="#" class="go nodecor logospace">
				</a>
				<h3 class="whitetxt">&nbsp;Solar power for everyone</h3>
				<div class="clearfix"></div>
			</div>

			<div class="header-top">
				<div class="top-nav">
					<ul class="floatright">
						<li class="active"><a href="#">HOME</a></li>
						<li><a href="products.php" >PRODUCTS</a></li>
						<li><a href="dash.php" >DASHBOARD</a></li>
					</ul>
				</div>
			</div>

			<div class="header-bottom">	
				<div class="top-nav">
					<span class="menu-in"><img src="images/go.png" alt=""> </span>
					<ul >
						<li class="active"><a href="#">HOME</a></li>
						<li><a href="products.php" >PRODUCTS</a></li>
						<li><a href="dash.php">DASHBOARD</a></li>
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

			<div class="col-md-4 men">
				<div class="blue shadow min175">
					<p>
						Welcome to Solr, our goal is to make solar energy affordable and easy to everyone, no strings attached.
					</p>
				</div>
				<div class="min175 shadow signing">
					
				</div>
			</div>

			<div class="col-md-4 men-grid-in">
				<div class="green shadow min350">
				<div class="solarpanel floatright" ></div>
					<p>We believe that solar energy can change the world. But we also believe that it's a hassle to set up. That's why we are here to help.</p>
					<p><br><br></p>
					<p>Solr will buy you roofs and windows that will help you contribute to a green planet. In exchange for the roofs and windows, we'll take a portion of the energy generated. You can keep track of how much energy is generated, and how much money you would've saved! </p>
					
				</div>
			</div>
			
			<div class="col-md-4 ">
				<div class="red shadow min350">
					<h3>Why Solr?</h3>
					<ul class="normal">
						<li>Solar power is a big investment </li>
						<li>Solar power requires maintenance </li>
						<li>Risk mitigation from the user</li>
						<li>Mutually beneficial </li>
					</ul>
					<p><br></p>
					<p>Solr will maintain the solar panels. The user is basically risk-free, all that for letting your home generating electricity for us! Not only is the user risk-free, but he'll also save a lot of money!</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//top-->

		<!--bottom-->
			<div class="content-middle">

				<div class="col-md-8 fixpad">
					<div class="red shadow min350"> 
						<h2>Solr products</h2>
						<ul class="normal big">
							<li><a href="/products.php#roof">Solr roof</a></li>
							<li><a href="/products.php#window">Solr window</a></li>
							<li><a href="/products.php#extern">Solr extern</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="sunshine shadow min350">
						
					</div>	
				</div>

				<div class="clearfix"> </div>
			</div>

		<!--//bottom-->

		<p class="footer-class">
			© 2017 Solr | Template by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</p>
	</div>
</div>
</body>
</html>
