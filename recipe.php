<?php

include_once "php/models/recipeModel.class.php";
include_once "php/models/commentModel.class.php";
include_once "header.php";

$idRecipe = $_GET["id"];

// Récupère la recette
$recipeModel = new RecipeModel();
$recipe = $recipeModel->getRecipe($idRecipe);

// Récupère tous les ingrédients de la recette
$ingredients = $recipeModel->getIngredients($idRecipe);

// Récupère tous les commentaires de la recette
$commentModel = new CommentModel();
$comments = $commentModel->getComments($idRecipe);

?>

<section id="main-background">

    <h2><?php echo $recipe["name"] ?></h2>
    <article id="recipeArticle">
        <ul> 
            <li><h3>Ingrédients</h3></li>  
            <?php foreach($ingredients as $ingredient): ?>    
                <li id="ingredient"><img alt="Image de l'ingrédient" src="images/products/<?php echo $ingredient["productImg"] ?>"><span><?php echo $ingredient["quantityProduct"] . " ". $ingredient["productName"] ?></span></li>
            <?php endforeach; ?>
            <li><p><?php echo $recipe["description"] ?><p></li>
        </ul>
        <ul>
            <li><img src="images/Recipes/<?php echo $recipe["image"] ?>"></li>
        <ul>
    </article>
    <article>
        <?php 
            foreach($comments as $comment): 
                if(count($comment["idComments"]) > 0): ?>
                    <p id="commName"><i class="fas fa-comments"></i> Rédigé par <span><?php echo $commentaire["pseudo"] ?></span> </p>
                    <p id="commentaire"> <?php echo $comment["comment"] ?> </p>
                <?php else : ?> 
                    <p><i class="fas fa-comments"></i> <em>Soyez le premier à réagir à cet article</em></p>
        <?php endif; endforeach;  ?>
    </article>
    <form method="POST" action="comment.php">
        <fieldset>
            <legend><i class="far fa-comment"></i> Nouveau commentaire</legend>
            <ul>
                <li>
                    <label for="pseudo">Pseudo: </label>
                    <input type="text" name="pseudo" id="pseudo" size="50">
                </li>
                <li>
                    <label for="commentaire">Commentaire: </label>
                    <textarea rows="4" cols="57" name="commentaire" id="commentaire" ></textarea>
                </li>
                <li id="buttons">
                    <button type="submit" name="addComments" id="btnOk" title="Ajouter un commentaire">Ajouter</button>
                    <button type="reset" name="cancelComments" id="btnCancel" title="Annuler le commentaire">Annuler</button>
                </li>
            </ul>
        </fieldset>
    </form>
</section>

<?php

include_once "footer.php";

?>