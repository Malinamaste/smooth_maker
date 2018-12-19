<?php

	include_once "php/models/commentModel.class.php";

	$page = "main";
	include_once "header.php";

	$commentModel = new CommentModel();
	$bests = $commentModel->getBestSellers();

	
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
			<?php foreach($bests as $best): ?>
			<li>
				<a href="recipe.php?id=<?php echo $best["idRecipe"] ?>">
					<img src="images/main/<?php echo $best["imageBest"] ?>" alt="<?php echo $best["name"] ?>">
				</a>
				<h3><?php echo $best["name"] ?></h3>
				
				<!-- Etoiles : notes moyennes de chaque recette -->
				<p>
					<?php $averageRate = $commentModel->getAverageRate($best["idRecipe"]); 
					
					$rate = $averageRate["averageRates"]; 
					$rateNb = substr($rate, 0, 1);
					$rateDecimal = substr($rate, 2, 1);

					if($rateDecimal > 0)
						$rateNone = 5-$rateNb-1;
					else {
						$rateNone = 5-$rateNb;
					}

					for($i = 1; $i <= $rateNb; $i++): ?>
						<i class="fas fa-star"></i>
					<?php endfor;

					if($rateDecimal >= 5):  ?>
						<i class="fas fa-star-half-alt"></i>
					<?php endif;

					for($i = 1; $i <= $rateNone; $i++): ?>
						<i class="far fa-star"></i>
					<?php endfor; ?>
				</p>
				<a href="#">Clique moi<i class="fas fa-plus-circle"></i></a>
			</li>
			<?php endforeach; ?>
		</ul>
	</article>

	<article id="recipes">
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
		<h2>Où nous trouver ?</h2>
		<h3>Notre boutique située au coeur du Vieux Lyon... avec toute son histoire</h3>
		<a href="#">
			<div class="wrap">
				<img src="images/main/localisation/vieux-lyon2.png" alt="Le Vieux Lyon">
				<i class="fas fa-plus-circle"></i>
			</div>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
		</a>
	</article>
</section>

<?php
	include_once "footer.php";
?>