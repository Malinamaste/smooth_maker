<?php 

include_once "php/classes/user.class.php";
include_once "php/models/favoriteModel.class.php";
include_once "php/models/userModel.class.php";

$userSession = new User();  

if($userSession->isAuthenticated() == false){
    header("Location: ../connexion.php");
    exit();
}
else {
    $userId = $userSession->getUserId();
    $favoriteModel = new FavoriteModel();

    $favoriteModel->newFavorite($_POST["idRecipe"], $userId);

    $favorite = $favoriteModel->getFavorite($userId, $_POST["idRecipe"]);
    
    $result = false;

    if(!empty($favorite)) {
        $result = true;
    }

    echo json_encode(["result" => $result]);

}

?>