<?php 

include "classes/user.class.php";

if(array_key_exists("email", $_POST)) {

    try
    {
        $email = $_POST["email"];
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $zip = $_POST["zip"];
        $password = $_POST["password"];

        $userModel = new UserModel();
        $userModel->create($firstName, $lastName, $email, $password, $zip);

    }
    catch(DomainException $exception) {

        $errorMessage = $exception->getMessage();
        return  [ 'errorMessage' => $errorMessage ];
    }

    header('Location: ../user.html');
    exit();
}

