<?php 

include "php/classes/user.class.php";

if(array_key_exists("email", $_POST)) {

    $errorMessage = "";

    try
    {
        $email = $_POST["email"];
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $zip = $_POST["zip"];
        $password = $_POST["password"];

        $userModel = new UserModel();
        $userModel->create($firstName, $lastName, $email, $password, $zip);

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
    <title>Formulaire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <main>
        <form action="user.php" method="POST" class="form-infos">
            <h1>Remplir les champs ci dessous</h1>   

            <!-- Message d'alerte si l'adresse mail existe déjà -->   
            <?php if(!empty($errorMessage)): ?>
                <p class="alert alert-danger" role="alert" > 
                    <?php echo $errorMessage; ?> 
                </p>
            <?php endif; ?>

                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label for="lastname"></label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Votre nom">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="firstname"></label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Votre prénom" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="zip"></label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="Votre code Postal">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-2">
                        <label for="email"></label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Votre adresse email">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="password"></label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Votre mot de passe">
                    </div>
                </div>
                <button id="save" class="btn btn-primary">Enregistrer</button>
            </form>
        </main>
              
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        
    <!-- Bootsrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>