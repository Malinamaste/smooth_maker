<?php

class UserModel {

    public function create(
        $firstName,
        $lastName,
        $email,
        $password,
        $zip
    ) {        

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT id
        FROM User
        WHERE email = ?
        ");
    
        $req->execute([$email]);
        $emailExist = $req->fetch();

        if(!empty($emailExist["id"])) {
            throw new DomainException("L'adresse mail existe déjà");
        }

        if(!empty($email) && !empty($firstName) && !empty($lastName) && !empty($password)) {

            $req = $bdd->prepare("INSERT INTO User
            (
                lastName,
                firstName,
                email,
                password,
                zip
            ) VALUES (?, ?, ?, ?, ?)");
            

            $hashPassword = $this->hashPassword($password);
            
            // Insertion de l'utilisateur dans la base de données.
            $req->execute(array($lastName, $firstName,$email,$hashPassword,$zip));
        } else {
            throw new DomainException("Merci de renseigner tous les champs");
        }
    }

    private function hashPassword($password) {

        $salt = '$2y$11$' . substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);
        return crypt($password, $salt);
    }

    public function getUser($email, $password) {

        include "php/bdd.php";

        $req = $bdd->prepare("
        SELECT *
        FROM User
        WHERE email = ? AND password = ?
        ");

        $req->execute(array($email, $password));
        $user = $req->fetch();

        if(empty($user["id"])) {
            throw new DomainException("Votre adresse mail ou votre mot de passe sont erronés");
        }

        return $user;
    }
}