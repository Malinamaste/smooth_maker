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
}