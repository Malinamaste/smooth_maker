<?php

    include_once "php/models/recipeModel.class.php";
    include_once "php/models/commentModel.class.php";

    $page = "recipes";
    include_once "header.php";

    $recipeModel = new RecipeModel();
    $recipes = $recipeModel->getAllRecipes();

    $commentModel = new CommentModel();
?>

<section id="main-background">
    <section id="all-recipes">
<?php foreach($recipes as $recipe): 
        
    // Réduire description
    $lg_max = 35; // nombre de caractère autorisé
    $description = strip_tags($recipe["description"]); // On retire toutes les balises
    if (strlen($description) > $lg_max) { 
        $description = substr($description, 0, $lg_max) ;
        $last_space = strrpos($description, " ") ;
        $description = substr($description, 0, $last_space)."..." ;
    }
?>
    <article id="recipesCard">
        <h2><?php echo $recipe["name"]; ?></h2>
        <a href="recipe.php?id=<?php echo $recipe["id"] ?>">
            <img src="images/Recipes/<?php echo $recipe["image"]; ?>">
            <i class="fas fa-plus-circle"></i>
            <p><?php echo $description; ?></p>

            <!-- Etoiles : notes moyennes de chaque recette -->
            <?php $averageRate = $commentModel->getAverageRate($recipe["id"]); 
            
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

            <p><?php echo $averageRate["nbRates"] ?> 

            <!-- Nb votes : rajout du 's' si plusieurs votes -->
                <?php if($averageRate["nbRates"] > 1) : ?> 
                votes
                <?php else: ?> 
                vote
                <?php endif;?>
            </p>
        </a>
    </article>

<?php endforeach; ?>
    </section>
</section>

<?php

    include_once "footer.php";

?>