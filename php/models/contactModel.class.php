<?php 

class ContactModel {

    public function createContact() {

        include "php/bdd.php";

        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $zip = $_POST["zip"];
        $city = $_POST["city"];

        $req = $bdd->prepare("INSERT INTO Contact
        (
            firstName,
            lastName,
            email, 
            zip,
            city
        ) VALUES (?, ?, ?, ?, ?)");

        $req->execute([$firstName, $lastName, $email, $zip, $city]);
    }
}