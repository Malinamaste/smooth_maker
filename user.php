<?php 

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
    <article id="new-user">
        <h1><i class="far fa-file-alt"></i>Inscription</h1>
        
        <form action="user.php" method="POST" class="form-infos">
            <h2>Veuillez remplir le formulaire</h2>  

            <!-- Message d'alerte si l'adresse mail existe déjà -->   
            <?php if(!empty($errorMessage)): ?>
                <p class="alert alert-danger" role="alert" > 
                    <?php echo $errorMessage; ?> 
                </p>
            <?php endif; ?>

            <ul>
                <li>
                    <label for="lastname"></label>
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Nom">
                </li>
                <li>
                    <label for="firstname"></label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" >
                </li>
                <li>
                    <label for="zip"></label>
                    <input type="text" class="form-control" name="zip" id="zip" placeholder="Code postal">
                </li>
                <li>
                    <label for="email"></label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email@">
                </li>
                <li>
                    <label for="password"></label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe">
                </li>
                <li>
                    <button id="save" class="btn btn-primary">Enregistrer</button>
                    <a href="main.php" class="btn btn-primary">Annuler</a>
                </li>
            </ul>

        </form>
    </article>
</section>

<?php

    include_once "footer.php";

?>
