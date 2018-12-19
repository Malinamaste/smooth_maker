<?php

include_once "php/models/recipeModel.class.php";

$page = "recipes";
include_once "header.php";

$recipeModel = new RecipeModel();
$recipes = $recipeModel->getAllRecipes();



?>

<section id="main-background" class="recipes">

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
            <a href="recipe.php?id=<?php echo $recipe["id"] ?>">
                <h2><?php echo $recipe["name"]; ?><h2>
                <p><?php echo $description; ?><p>
                <img src="images/Recipes/<?php echo $recipe["image"]; ?>">
                <p>Clique moi</p>
            </a>
        </article>

    <?php endforeach; ?>

</section>

<?php

include_once "footer.php";

?>