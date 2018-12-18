<?php 

include_once "php/classes/user.class.php";

if(array_key_exists("email", $_POST)) {

    $errorMessage = "";
    
    try
    {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $userModel = new UserModel();
        $user = $userModel->getUser($email, $password);

        $userSession = new User();
        $userSession->create($user["id"], $user["firstName"] , $user["lastName"], $user["email"]);
        
        header("Location: main.php");
        exit();

    }
    catch(DomainException $exception) {

        $errorMessage = $exception->getMessage();
    }
}


$page = "connexion";
include_once "header.php";

?>

<section id="main-background">
    <form method="POST" action="connexion.php" class="form-signin">
        <h1>Connexion</h1>

        <!-- Message d'alerte si l'adresse mail ou le mot de passe ne sont pas bons -->   
        <?php if(!empty($errorMessage)): ?>
            <p class="alert alert-danger" role="alert" > 
                <?php echo $errorMessage; ?> 
            </p>
        <?php endif; ?>

        <div class="form-group">
            <label for="email"></label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Votre adresse email">
        </div>
        <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Se souvenir de moi</label>
        </div>
        <button id="connexion" class="btn btn-primary">Se connecter</button>
    </form>
<section>

<?php

include_once "footer.php";

?>
