<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Wai Smoothies</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Flat Icon -->
		<link rel="icon" type="image/png" href="images/fruit-juice.png" />
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
		<!-- Reset -->
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
		<!-- CSS Perso -->
		<link rel="stylesheet" type="text/css" href="css/base.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body>
		<!-- HEADER -->
		<header id="header">
			<a href="index.php"><img src="images/logo.png" alt="Logo de Wai Smoothies"><br/>Jus de fruit 100% BIO</a>
			<nav id="social">
				<ul>
					<li>
						<a href="#"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-pinterest-p"></i></a>
					</li>
					<li>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</nav>
			<nav id="main-nav">
				<ul>
					<li>
						<a href="#">Notre concept</a>
					</li>
					<li>
						<a href="#">Nos recettes</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
			</nav>

		</header>
		<!-- MAIN CONTENT -->
		<main>
			<?php include $page.'.php' ?>
		</main>
		