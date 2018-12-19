<?php 

class CommentModel {

    public function getComments($idRecipe){

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT comment, firstName, lastName, Comments.id AS idComments, rates
        FROM Comments
        INNER JOIN User ON User.id = Comments.idUser
        WHERE idRecipe = ?
        ");

        $req->execute([$idRecipe]);
        $comments = $req->fetchAll();

        return $comments;
    }

    public function createComment($idRecipe, $idUser) {

        include "php/bdd.php";

        $comment = $_POST["commentaire"];
        $rate = $_POST["rates"];

        $req = $bdd->prepare("INSERT INTO Comments
        (
            comment,
            idUser,
            idRecipe, 
            rates
        ) VALUES (?, ?, ?, ?)");

        $req->execute([$comment, $idUser, $idRecipe, $rate]);
    }

    public function getAverageRate($idRecipe){

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT count(rates) AS nbRates, AVG(rates) AS averageRates
        FROM Comments
        WHERE idRecipe = ?
        ");

        $req->execute([$idRecipe]);
        $averageRate = $req->fetch();

        return $averageRate;
    }
}