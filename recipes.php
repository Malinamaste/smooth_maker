<?php

    include_once "php/models/recipeModel.class.php";

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
            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        </a>
    </article>

<?php endforeach; ?>
    </section>
</section>

<?php

    include_once "footer.php";

?>