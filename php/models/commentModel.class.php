<?php 

class CommentModel {

    public function getComments($idRecipe){

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT comment, firstName, lastName, Comments.id AS idComments
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

        $req = $bdd->prepare("INSERT INTO User
        (
            lastName,
            firstName,
            email,
            password,
            zip
        ) VALUES (?, ?, ?, ?, ?)");

        $req->execute([$idRecipe]);
        $comments = $req->fetchAll();

        return $comments;
    }
}