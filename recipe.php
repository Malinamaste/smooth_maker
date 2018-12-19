<?php

include_once "php/classes/user.class.php";
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

if(array_key_exists("commentaire", $_POST)) {

    if($userSession->isAuthenticated() == false){
        header("Location: connexion.php");
        exit();
    }

    $userSession = new User();  
    $userId = $userSession->getUserId();

    $commentModel = new CommentModel();  
    $commentModel->createComment($idRecipe, $userId);

    $comments = $commentModel->getComments($idRecipe);
    
}

?>

<section id="main-background">

    <section id="recipeSection">
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
    </section>
    <section id="commentaires">
        <article>
            <?php 
                if(count($comments) > 0): 
                    foreach($comments as $comment):?>
                        <span id="comm">
                            <p id="commName"><i class="far fa-comment-dots"></i> Rédigé par <span><?php echo $comment["firstName"] ." " . $comment["lastName"]  ?></span>
                            <p> Note : <?php echo $comment["rates"] ?> /5 </p>
                            <p id="commentaire"> <?php echo $comment["comment"] ?> </p>
                        </span>                    
                    <?php endforeach;  ?>
            <?php else : ?> 
                    <p><i class="fas fa-comments"></i> <em>Soyez le premier à réagir</em></p>
            <?php endif;  ?>
        </article>
        <form method="POST">
            <fieldset>
                <legend> Nouveau commentaire</legend>
                <ul>
                    <li>
                        <label for="rates"> </label>
                        <input type= "radio" name="rates" value="1"> <i class="far fa-star"></i>
                        <input type= "radio" name="rates" value="2"> <i class="far fa-star"></i>
                        <input type= "radio" name="rates" value="3"> <i class="far fa-star"></i>
                        <input type= "radio" name="rates" value="4"> <i class="far fa-star"></i>
                        <input type= "radio" name="rates" value="5"> <i class="far fa-star"></i>
                    </li>
                    <li>
                        <label for="commentaire"> </label>
                        <textarea rows="4" cols="57" name="commentaire" id="commentaire" ></textarea>
                    </li>
                    <li id="buttons">
                        <button type="submit" id="btnOk" title="Ajouter un commentaire">Ajouter</button>
                        <button type="reset" id="btnCancel" title="Annuler le commentaire">Annuler</i></button>
                    </li>
                </ul>
            </fieldset>
        </form>
    </section>
</section>

<?php

include_once "footer.php";

?>