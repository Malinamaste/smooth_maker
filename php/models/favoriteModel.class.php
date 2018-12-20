<?php 

class FavoriteModel {

    public function getFavorites($idUser){

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT *
        FROM Favorite
        INNER JOIN Recipe ON Recipe.id = Favorite.idRecipe
        WHERE idUser = ?
        ");

        $req->execute([$idUser]);
        $favorites = $req->fetchAll();

        return $favorites;
    }

    public function getFavorite($idUser, $idRecipe){

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT *
        FROM Favorite
        WHERE idUser = ? AND idRecipe = ?
        ");

        $req->execute([$idUser, $idRecipe]);
        $favorite = $req->fetch();

        return $favorite;
    }

    public function newFavorite($idRecipe, $idUser) {

        include "php/bdd.php";

        $req = $bdd->prepare("INSERT INTO Favorite
        (
            idUser,
            idRecipe
        ) VALUES (?, ?)");

        $req->execute([$idUser, $idRecipe]);
    }

    public function removeFavorite($idUser, $idRecipe){

        include "php/bdd.php";

        $req = $bdd->prepare("
        DELETE
        FROM Favorite
        WHERE idUser = ? AND idRecipe = ?
        ");

        $result = $req->execute([$idUser, $idRecipe]);
        return $result;
    }
}