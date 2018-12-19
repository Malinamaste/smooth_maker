<?php

include_once "php/classes/user.class.php";

$userSession = new User();  

// if($userSession->isAuthenticated() == false){
// 	header("Location: connexion.php");
// 	exit();
// }
// else {
// 	$user = $userSession->getFullName();
// }

?>

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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<!-- <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet"> -->
		<!-- Reset -->
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="all" />
		<!-- CSS Perso -->
		<link rel="stylesheet" type="text/css" href="css/base.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body>
		<!-- HEADER -->
		<header id="header">
			<section id="connexion">
				<p id="nameUserConnect">Bonjour <?php echo $user ?> ! </p>
				<a href="connexion.php" title="Connectez-vous"><i class="fas fa-user"></i></a>	
				<a href="main.php" title="Déconnexion"><i class="fas fa-user-times"></i></a>
			</section>
			<a href="main.php"><img src="images/logo.png" alt="Logo de Wai Smoothies"><br/>Jus de fruit 100% BIO</a>
			<div id="wrapper">
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
						<a href="concept.php">Notre concept</a>
					</li>
					<li>
						<a href="recipes">Nos recettes</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
			</nav>
			</div>
		</header>
	<main>
		