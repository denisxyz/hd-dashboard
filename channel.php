<?php
	session_start();
	
	if(isset($_POST['user'])){
		$_SESSION['user'] = $_POST['user'];
		$_SESSION['pass'] = $_POST['pass'];
	}
	
	if(isset($_SESSION['user'])){
		$user = $_SESSION['user'];
		$pass = $_SESSION['pass'];
	}
	else{
		$user = '';
		$pass = '';
	}
	
	if ($user!=="hairydog" || $pass!=='Ypjy66ZgSS') {
	?>
		<form method="POST" action="#">
			<p>User <input type="text" name="user"></input></p>
			<p>Pass <input type="password" name="pass"></input></p>
			<p><input type="submit" name="submit" value="Log In"></input></p>
		</form>
	<?php
	}
	else{
	?>
		<!DOCTYPE HTML>
		<html>
			<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Hairydog Dashboard</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description" content="" />
			<meta name="keywords" content="" />
			<meta name="author" content="" />

		  <!-- Facebook and Twitter integration -->
			<meta property="og:title" content=""/>
			<meta property="og:image" content=""/>
			<meta property="og:url" content=""/>
			<meta property="og:site_name" content=""/>
			<meta property="og:description" content=""/>
			<meta name="twitter:title" content="" />
			<meta name="twitter:image" content="" />
			<meta name="twitter:url" content="" />
			<meta name="twitter:card" content="" />

			<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
			<link rel="shortcut icon" href="favicon.ico">

			<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
			
			<!-- Animate.css -->
			<link rel="stylesheet" href="css/animate.css">
			<!-- Icomoon Icon Fonts-->
			<link rel="stylesheet" href="css/icomoon.css">
			<!-- Bootstrap  -->
			<link rel="stylesheet" href="css/bootstrap.css">
			<!-- Flexslider  -->
			<link rel="stylesheet" href="css/flexslider.css">
			<!-- Flaticons  -->
			<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
			<!-- Owl Carousel -->
			<link rel="stylesheet" href="css/owl.carousel.min.css">
			<link rel="stylesheet" href="css/owl.theme.default.min.css">
			<!-- Theme style  -->
			<link rel="stylesheet" href="css/style.css">

			<!-- Modernizr JS -->
			<script src="js/modernizr-2.6.2.min.js"></script>
			<!-- FOR IE9 below -->
			<!--[if lt IE 9]>
			<script src="js/respond.min.js"></script>
			<![endif]-->

			</head>
			<body>
			<div id="colorlib-page">
				<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
				<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
					<h1 id="colorlib-logo"><a href="index.php">Hairydog</a></h1>
					<nav id="colorlib-main-menu" role="navigation">
						<ul>
							<li><a href="index.php">Marketing Overview</a></li>
							<li><a href="demographics.php">Demographics</a></li>
							<li class="colorlib-active"><a href="channel.php">Marketing Channels</a></li>
							<li><a href="search.php">Search Terms</a></li>
							<li><a href="elvanti-overview.php">Elvanti - Overview</a></li>
							<li><a href="elvanti-products.php">Elvanti - Products</a></li>
						</ul>
					</nav>
				</aside>

				<div id="colorlib-main">
					<aside id="colorlib-hero" class="js-fullheight">
						<div class="flexslider js-fullheight">
							<iframe width="100%" height="100%" src="https://datastudio.google.com/embed/reporting/1cab7128-8703-40ab-8443-320656c3768e/page/p_b5xej02atc" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</aside>
				</div>
			</div>

			<!-- jQuery -->
			<script src="js/jquery.min.js"></script>
			<!-- jQuery Easing -->
			<script src="js/jquery.easing.1.3.js"></script>
			<!-- Bootstrap -->
			<script src="js/bootstrap.min.js"></script>
			<!-- Waypoints -->
			<script src="js/jquery.waypoints.min.js"></script>
			<!-- Flexslider -->
			<script src="js/jquery.flexslider-min.js"></script>
			<!-- Sticky Kit -->
			<script src="js/sticky-kit.min.js"></script>
			<!-- Owl carousel -->
			<script src="js/owl.carousel.min.js"></script>
			<!-- Counters -->
			<script src="js/jquery.countTo.js"></script>
			
			
			<!-- MAIN JS -->
			<script src="js/main.js"></script>

			</body>
		</html>
	<?php
	}
	?>
