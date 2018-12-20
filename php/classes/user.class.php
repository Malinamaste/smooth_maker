<?php

class User {

    public function __construct() {
        if(session_status() == PHP_SESSION_NONE) {
            session_start();
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

    public function getUserId(){
        if($this->isAuthenticated()) {
            return $_SESSION['user']['UserId'];
        }
    }

    public function getFullName() {

        if($this->isAuthenticated()) {
            return $_SESSION["user"]["FirstName"] . " " .  $_SESSION["user"]["LastName"];
        }
     }

}