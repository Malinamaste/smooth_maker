<?php 

include_once "php/models/userModel.class.php";

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

$page = "user";
include_once "header.php";

?>

<section id="main-background">
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
</section>

<?php

include_once "footer.php";

?>
