<?php

include "models/userModel.class.php";

class User {

    public function __construct() {
        if(session_status() == PHP_SESSION_NONE) {
            session_start(); // démarrer les services de session
        }
    }

    public function create($userId, $firstName, $lastName, $email) {
        $_SESSION["user"] = [
        	'UserId' => $userId,
            'FirstName' => $firstName,
            'LastName'  => $lastName,
            'Email'     => $email
        ];
    }


    /*
    public function isAuthenticated(){
    	if(array_key_exists("user", $_SESSION)) {
            if(!empty($_SESSION["user"])) {
                return true;
            }
        }
        return false;
    }

    public function destroy() {
        $_SESSION["user"] = [];
        session_destroy();
    }
    */

}