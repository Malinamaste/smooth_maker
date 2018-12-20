<?php 

class ContactModel {

    public function createContact() {

        include "php/bdd.php";

        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $email = $_POST["email"];
        $zip = $_POST["zip"];
        $city = $_POST["city"];

        if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($zip) && !empty($city)) {

            $req = $bdd->prepare("INSERT INTO Contact
            (
                firstName,
                lastName,
                email, 
                zip,
                city
            ) VALUES (?, ?, ?, ?, ?)");

            $req->execute([$firstName, $lastName, $email, $zip, $city]);
        }  else {
            throw new DomainException("Merci de renseigner tous les champs");
        }
    }
}