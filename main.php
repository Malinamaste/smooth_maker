<?php

	$page = "main";
	include_once "header.php";
?>

<section id="main-background">

	<article id="slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  			<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  			</ol>
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img class="d-block w-100" src="images/photos/048120.jpg" alt="First slide">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="images/photos/batido-detox-de-espinacas-kiwi-y-naranja.jpg" alt="Second slide">
    			</div>
    			<div class="carousel-item">
      				<img class="d-block w-100" src="images/photos/Recette_CANDIA_Smoothie_exotique.jpg" alt="Third slide">
    			</div>
  			</div>
		</div>
	</article>

	<article id="best-sellers">
		<h2>Nos Best-Sellers</h2>
		<ul>
			<li>
				<a href="#">
					<img src="images/main/smoothie-detox.png" alt="Smoothie Bonne mine">
				</a>
				<h3>Bonne mine</h3>
				<!-- ETOILES NOTATION -->
				<a href="#">Clique moi<i class="fas fa-plus-circle"></i></a>
			</li>
			<li>
				<a href="#">
					<img src="images/main/smoothie-detox2.png" alt="Booster La vie ensoleillée">
				</a>
				<h3>La vie ensoleillée</h3>
				<!-- ETOILES NOTATION -->
				<a href="#">Clique moi<i class="fas fa-plus-circle"></i></a>
			</li>
			<li>
				<a href="#">
					<img src="images/main/smoothie-detox3.png" alt="Smoothie Booster d'humeur">
				</a>
				<h3>Booster d'humeur</h3>
				<!-- ETOILES NOTATION -->
				<a href="#">Clique moi<i class="fas fa-plus-circle"></i></a>
			</li>
		</ul>
	</article>

	<article id="recipes" class="clear">
	<h2>Nos recettes</h2>
		<a href="recipes.php">
			<div class="wrap-left">
				<h3>Detox Power</h3>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
				<i class="fas fa-plus-circle"></i>
			</div>
			<img src="images/main/smoothie_img.png" alt="Nos recettes préférées">
		</a>
	</article>

	<article id="findus">
		<a href="#">
			<h2>Où nous trouver ?</h2>
			<h3>Notre boutique située au coeur du Vieux Lyon... avec toute son histoire</h3>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
			<img src="images/" alt="Le Vieux Lyon">
			<i class="fas fa-plus-circle"></i>
		</a>
	</article>
</section>

<?php
	include_once "footer.php";
?>