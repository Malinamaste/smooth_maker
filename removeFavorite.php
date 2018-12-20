<?php 

include_once "php/classes/user.class.php";
include_once "php/models/favoriteModel.class.php";
include_once "php/models/userModel.class.php";

$userSession = new User();  
$userId = $userSession->getUserId();

$favoriteModel = new FavoriteModel();

$favorite = $favoriteModel->removeFavorite($userId, $_POST["idRecipe"]);

$result = false;

if($favorite) {
    $result = true;
}

echo json_encode(["result" => $result]);

?>