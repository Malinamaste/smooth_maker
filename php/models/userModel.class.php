<?php

class UserModel {

    public function create(
        $firstName,
        $lastName,
        $email,
        $password,
        $zip
    ) {        

        include "bdd.php";

        $req = $bdd->prepare("
        SELECT *
        FROM User
        WHERE email = ?
        ");
    
        $req->execute([$email]);
        $emailExist = $req->fetch();

        if(!empty($emailExist)) {
            throw new DomainException("L'utilisateur existe déjà");
        }

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
    }

    private function hashPassword($password) {

        $salt = '$2y$11$' . substr(bin2hex(openssl_random_pseudo_bytes(32)), 0, 22);
        return crypt($password, $salt);
    }
 
}