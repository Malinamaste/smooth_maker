<?php 

class RecipeModel {

    public function getAllRecipes(){

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT *
        FROM Recipe
        ");

        $req->execute();
        $recipes = $req->fetchAll();

        return $recipes;
    }

    public function getRecipe($id){

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT *
        FROM Recipe
        WHERE Recipe.id = ?
        ");

        $req->execute([$id]);
        $recipe = $req->fetch();

        return $recipe;
    }

    public function getIngredients($idRecipe){

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT Product.image AS productImg, quantityProduct, Unit.shortcut, Unit.name AS nameUnit, Product.name as productName
        FROM Recipe
        INNER JOIN RecipeProduct ON RecipeProduct.idReciepe = Recipe.id
        INNER JOIN Product ON Product.id = RecipeProduct.idProduct
        INNER JOIN Unit ON Unit.id = RecipeProduct.idUnit
        WHERE Recipe.id = ?
        ");

        $req->execute([$idRecipe]);
        $ingredients = $req->fetchAll();

        return $ingredients;
    }
}