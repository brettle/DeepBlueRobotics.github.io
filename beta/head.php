<?php 
		ini_set('display_errors', 1);
		error_reporting(E_ALL|E_STRICT);?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="google-site-verification" content="Gi5A44MZSvihqc_1TxxSCPZvW7DU9G7k393YgmLa4Fo" />
	<meta name="google-site-verification" content="sIHo4Zq6kQcVQ5uL7AMgZEvpDiJCxsbgIBoSpduEz1U" />
	<title>
		<?php
			//Set title based on file that included head.php
			switch (basename($header_referer, '.php')) {
					case "index":
							echo "Home";
							break;
						case "about":
							echo "About";
							break;
					case "shop":
							echo "Shop";
							break;
					case "sponsors":
							echo "Sponsors";
							break;
					case "sponsor-us":
							echo "Sponsor Us";
							break;
					case "media":
							echo "Media";
							break;
					case "more":
							echo "More";
							break;
					case "contact":
							echo "Contact";
							break;
			} ?> | Deep Blue Robotics
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/fontAwesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/default.css" rel="stylesheet">
	<link href="css/max960.css" rel="stylesheet">
	<link href="css/max768.css" rel="stylesheet">
	<link href="css/max480.css" rel="stylesheet">
	<link href="css/max320.css" rel="stylesheet">


	<link rel="shortcut icon" href="images/ico/tabicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/tabicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/tabicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/tabicon.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/tabicon.png">
	<style type="text/css"></style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
</head>
<!--/head-->

<body>
	<div id="header-wrap">
		<div id="header" class="container">
			<label id="nav-trigger" class="hamburger" for="mobile-input"><span></span></label>

			<h1 id="logo">
						<a href="index.php">
							<img src="images/logo.png"/>
						</a>
				</h1>

			<div id="nav">
				<ul>
					<li <?php if(basename($header_referer, '.php')=="index" ) echo "id='active'";?>>
						<a href="index.php#"><strong>Home</strong></a>
					</li>
					<li <?php if(basename($header_referer, '.php')=="about" ) echo "id='active'";?>>
						<a href="about.php"><strong>About</strong></a>
					</li>
					<li <?php if(basename($header_referer, '.php')=="shop" ) echo "id='active'";?>>
						<a href="shop.php"><strong>Shop</strong></a>
					</li>
					<li <?php if(basename($header_referer, '.php')=="sponsors" ) echo "id='active'";?>>
						<a href="sponsors.php"><strong>Sponsors</strong></a>
					</li>
					<li <?php if(basename($header_referer, '.php')=="sponsor-us" ) echo "id='active'";?>>
						<a href="sponsor-us.php"><strong>Sponsor Us</strong></a>
					</li>
					<li <?php if(basename($header_referer, '.php')=="media" ) echo "id='active'";?>>
						<a href="media.php"><strong>Media</strong></a>
					</li>
					<li <?php if(basename($header_referer, '.php')=="more" ) echo "id='active'";?>>
						<a href="more.php"><strong>More</strong></a>
						<ul>
							<li>
								<a href="calendar.php"><strong>Calendar</strong></a>
							</li>
							<li>
								<a href="calendar.php"><strong>FAQ</strong></a>
							</li>
						</ul>
					</li>
					<li <?php if(basename($header_referer, '.php')=="contact" ) echo "id='active'";?>>
						<a href="contact.php"><strong>Contact</strong></a>
					</li>

					<!-- Social Media Icons -->
					<li>
						<a href="https://www.facebook.com/frcteam199" target="_blank"><i class="fa fa-facebook-square fa-2x" style="margin-right:-10px;"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/frcteam199/" target="_blank"><i class="fa fa-instagram fa-2x" style="margin-right:-10px;"></i></a>
					</li>
					<li>
						<a href="https://www.youtube.com/channel/UCCHENRjx_EE5mJVBh6iHmcQ" target="_blank"><i class="fa fa-youtube fa-2x" style="margin-right:-10px;"></i></a>
					</li>
				</ul>
			</div>
		</div>

		<!-- Mobile Navigation Menu -->
		<div id="mobile-nav" class="container">
			<ul>
				<li <?php if(basename($header_referer, '.php')=="index" ) echo "id='active'";?>>
					<a href="index.php"><strong>Home</strong></a>
				</li>
				<li <?php if(basename($header_referer, '.php')=="about" ) echo "id='active'";?>>
					<a href="about.php"><strong>About</strong></a>
				</li>
				<li <?php if(basename($header_referer, '.php')=="shop" ) echo "id='active'";?>>
					<a href="shop.php"><strong>Shop</strong></a>
				</li>
				<li <?php if(basename($header_referer, '.php')=="sponsors" ) echo "id='active'";?>>
					<a href="sponsors.php"><strong>Sponsors</strong></a>
				</li>
				<li <?php if(basename($header_referer, '.php')=="sponsor-us" ) echo "id='active'";?>>
					<a href="sponsor-us.php"><strong>Sponsor Us</strong></a>
				</li>
				<li <?php if(basename($header_referer, '.php')=="media" ) echo "id='active'";?>>
					<a href="media.php"><strong>Media</strong></a>
				</li>
				<li <?php if(basename($header_referer, '.php')=="more" ) echo "id='active'";?>>
					<a href="more.php"><strong>More</strong></a>
				</li>
				<li <?php if(basename($header_referer, '.php')=="contact" ) echo "id='active'";?>>
					<a href="contact.php"><strong>Contact</strong></a>
				</li>
			</ul>
		</div>
	</div>

	<div id="wsite-wrap">