<?php

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

    $userSession = new User();

    if(array_key_exists("commentaire", $_POST)) {

        if($userSession->isAuthenticated() == false){
            header("Location: connexion.php");
            exit();
        }
        
        $userId = $userSession->getUserId();

        $commentModel->createComment($idRecipe, $userId);

        $comments = $commentModel->getComments($idRecipe);
    }

    // Afficher favoris ou non
    $userId = $userSession->getUserId();
    $favoriteModel = new FavoriteModel();
    $favorite = $favoriteModel->getFavorite($userId, $idRecipe);

?>

<section id="main-background">

    <section id="recipeSection">
        <ul id="fav">
            <li>
                    <?php if(empty($favorite)): ?> <a id="addFavorite" href="#"><i class="fas fa-heart"></i> Ajouter aux favoris</a>
                    <?php else: ?> <a id="removeFavorite" href="#"><i class="fas fa-heart-broken"></i> Retirer des favoris</a>
                    <?php endif; ?>
            </li>
        </ul>
        <h2><?php echo $recipe["name"] ?></h2>
        <article id="recipeArticle">
            <ul> 
                <?php foreach($ingredients as $ingredient): ?>    
                <li id="ingredient">
                    <img alt="Image de l'ingrédient" src="images/products/<?php echo $ingredient["productImg"] ?>">
                    <span><?php echo $ingredient["quantityProduct"] . " ". $ingredient["productName"] ?></span>
                </li>
                <?php endforeach; ?>
                <li id="description">
                    <p><?php echo $recipe["description"] ?><p>
                </li>
            </ul>
            <ul id="recipePicture">
                <li>
                    <img src="images/Recipes/<?php echo $recipe["image"] ?>">
                </li>
                <li>
                    <p>
                        <?php if(empty($favorite)): ?> <i id="heartFav" class="far fa-heart"></i>
                        <?php else: ?> <i id="heartNoFav" class="fas fa-heart"></i>
                        <?php endif; ?>
                    </p>
                </li>

                <!-- Etoiles : notes moyennes de chaque recette -->
                <?php $averageRate = $commentModel->getAverageRate($recipe["id"]); 
                    
                    $rate = $averageRate["averageRates"]; 
                    $rateNb = substr($rate, 0, 1);
                    $rateDecimal = substr($rate, 2, 1);
                ?>
                <li class="vote">
                    <p>
                        <?php 
                            if($rateDecimal > 0)
                                echo $rateNb.",".$rateDecimal."/5";
                            else {
                                echo $rateNb."/5";
                            }
                            
                        ?>
                    </p>
                </li>
                <li>
                    <?php    
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
                </li>
                <li class="vote">
                    <p><?php echo $averageRate["nbRates"] ?> 

                    <!-- Nb votes : rajout du 's' si plusieurs votes -->
                        <?php if($averageRate["nbRates"] > 1) : ?> 
                        votes
                        <?php else: ?> 
                        vote
                        <?php endif;?>
                </li>
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