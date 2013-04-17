<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
	
		<title>Vierseithof</title>
		
		<meta name="description" content="Urlaub auf dem Lande für Skater, Radler, Erholungssuchende und Naturfreunde in Spreewaldnähe.">
		<meta name="keywords" content="Ferienwohnungen, Urlaub, Land, Spreewald, Brandenburg, Skaten, Radeln, Erholung, Natur">
		<meta name="author" content="Sigrid Heumann">		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/colorbox.css">
		
		<link rel="icon" href="img/favicon.png" type="image/png">
		
		<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="scripts/jquery.colorbox.js" type="text/javascript"></script>
		<script src="scripts/cycle.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=&sensor=true"></script>
		<script src="scripts/maps.js" type="text/javascript"></script>
		
	</head>
	
	<body>
		
			<div id="wrapper">
				<div id="header">
					<div id="logo">
						<img src="img/logo.jpg" alt="Vierseithof" >
					</div>
					<div id="navi">
						<ul id="navlist">
							<li><a href="index.php?sub=startseite">Startseite</a></li>
							<li><a href="index.php?sub=ferienwohnungen">Ferienwohnungen</a></li>
							<li><a href="index.php?sub=vierseithof">Vierseithof</a></li>
							<li><a href="index.php?sub=umgebung">Umgebung</a></li>
							<li><a href="index.php?sub=freizeit">Freizeit</a></li>
							<li><a href="index.php?sub=preise" class="last">Unsere Preise</a></li>
						</ul>
					</div>
				</div>
				<div id="picture_wrapper">
						
					<div id="disclaimer">
						<h1>Relaxen auf dem Vierseithof</h1>
						<p>Ideal gelegen zwischen den Weltstädten Berlin, Potsdam und Dresden, der Lutherstadt Wittenberg und dem Spreewald mit seinen Wasserwegen liegt in dem ruhigen Flämingdorf Rietdorf naturnah unser historischer Vierseithof.</p>
					</div>

					<div id="slider">
						<img src="img/banner_1.jpg" alt="Banner_1" >
						<img src="img/banner_2.jpg" alt="Banner_2" >
						<img src="img/banner_3.jpg" alt="Banner_3" >
						<img src="img/banner_4.jpg" alt="Banner_4" >
						<img src="img/banner_5.jpg" alt="Banner_5" >
						<img src="img/banner_6.jpg" alt="Banner_6" >
						<img src="img/banner_7.jpg" alt="Banner_7" >
						<img src="img/banner_8.jpg" alt="Banner_8" >
						<img src="img/banner_9.jpg" alt="Banner_9" >						
					</div>
				</div>
					<?php
						if (isset($_GET['sub'])) {
							switch($_GET['sub']) {
								case 'startseite':
									include 'startseite.php';
									break;
								case 'impressum':
									include 'impressum.php';
									break;
								case 'links':
									include 'links.php';
									break;									
								case 'ferienwohnungen':
									include 'ferienwohnungen.php';
									break;
								case 'vierseithof':
									include 'vierseithof.php';
									break;									
								case 'freizeit':
									include 'freizeit.php';
									break;
								case 'umgebung':
									include 'umgebung.php';
									break;									
								case 'preise':
									include 'preise.php';
									break;
								default:
									include 'startseite.php';
									break;							
							}
						}
						else {
							include 'startseite.php';
						}
					?>
				<div id="footer">
						<ul id="footerlist">
							<li><a href="index.php?sub=impressum">Impressum</a></li>
							<li><a href="index.php?sub=links">Links</a></li>
							<li class="last"><a href="index.php?sub=login" class="last">Admin-Login</a></li>
						</ul>
					<div id="strict">
						<a href="http://validator.w3.org/" alt="HTML 4.0.1 Strict VALID"><img src="img/strict.png" alt="HTML 4.0.1 Strict VALID" ></a>
						<a href="http://jigsaw.w3.org/css-validator/" alt="CSS 3 VALID"><img src="img/css.png" alt="css3 VALID" ></a>
					</div>
				</div>
			</div>
	</body>
</html>