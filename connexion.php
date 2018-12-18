<?php 

include "php/classes/user.class.php";

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

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire de connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
</head>
    <body>
        <main id="connexion">
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
        </main>


        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        
        <!-- Bootsrap -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>