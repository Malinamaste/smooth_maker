<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Wai Smoothies</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Flat Icon -->
		<link rel="icon" type="image/png" href="images/fruit-juice.png" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
		<!-- Google Fonts -->
		<!-- Reset -->
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
		<!-- CSS Perso -->
		<link rel="stylesheet" type="text/css" href="css/base.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body>
		<!-- HEADER -->
		<header id="header">
			<a href="index.php"><img src="images/fresh.jpg" alt="Logo de Wai Smoothies"></a>
			<nav id="main-nav">
				<ul>
					<li>
						<a href="#">Le concept</a>
					</li>
					<li>
						<a href="#">Les recettes</a>
					</li>
					<li>
						<a href="#">Notre histoire</a>
					</li>
					<li>
						<a href="#">Nous contacter</a>
					</li>
					<li>
						<a href="#">Connexion</a>
					</li>
				</ul>
			</nav>
		</header>
		<!-- MAIN CONTENT -->
		<main>
			<?php include 'main.php' ?>
		</main>
		<!-- FOOTER -->
		<footer>
			<div id="footer" class="container">
				<section id="map">
					<h5>Où nous trouver</h5>
					<!-- MAP -->
				</section>
				<section id="contact">
					<h5>Contactez-nous</h5>
					<ul>
						<li>Wai Smoothies</li>
						<li>34 rue des fruits</li>
						<li>69002 Lyon</li>
						<li>Telephone: +33 4 25 45 89 47</li>
						<li>E-mail: <a href="#">info@wai-smoothies.com</a></li>
					</ul>
				</section>
				<section id="newsletter">
					<h5>Abonnez-vous à notre newsletter</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<form>
						<label></label>
						<input type="submit" name="subscribe" value="S'INSCRIRE">
						<button href="#"></button>
					</form>
				</section>
			</div>
		</footer>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<!-- Text Animation -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<!-- JS Perso -->
	<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>