<?php 

    $page = "contact";
    include_once "header.php";

    include_once "php/models/contactModel.class.php";

    if(array_key_exists("email", $_POST)) {
        try
            {
                $contactModel = new ContactModel();
                $contactModel->createContact();

            }
            catch(DomainException $exception) {

                $errorMessage = $exception->getMessage();
            }
    }

?>

<section id="main-background">

    <article id="contact-wai">
        <h1><i class="fas fa-envelope"></i>Contactez-nous</h1>

        <p>Si vous souhaitez contacter l'équipe de Wai, nous faire des suggestions, ou nous demander quoi que ce soit, vous êtes au bon endroit ! Nous vous répondrons aussi vite que possible.</p>
        
        <div class="flex">
            <form action="contact.php" method="POST" class="form-infos wrap">
                <h2>Veuillez remplir le formulaire pour nous contacter...</h2>

            <!-- Message d'alerte si l'adresse mail existe déjà -->   
            <?php if(!empty($errorMessage)): ?>
                <p class="alert alert-danger" role="alert" > 
                    <?php echo $errorMessage; ?> 
                </p>
            <?php endif; ?>

                <ul>
                    <li>
                        <label for="lastname"></label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Nom" value="<?php if(array_key_exists("lastname", $_POST)) { echo $_POST["lastname"];  }?>">
                    </li>
                    <li>
                        <label for="firstname"></label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Prénom" value="<?php if(array_key_exists("firstname", $_POST)) { echo $_POST["firstname"];  }?>">
                    </li>
                    <li>
                        <label for="email"></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email@" value="<?php if(array_key_exists("email", $_POST)) { echo $_POST["email"];  }?>">
                    </li>
                    <li>
                        <label for="zip"></label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="Code postal" value="<?php if(array_key_exists("zip", $_POST)) { echo $_POST["zip"];  }?>">
                    </li>
                    <li>
                        <label for="city"></label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Ville" value="<?php if(array_key_exists("city", $_POST)) { echo $_POST["city"];  }?>">
                    </li>
                    <li class="last">
                        <button id="save" class="btn btn-primary">Enregistrer</button>
                        <a href="main.php" class="btn btn-primary">Annuler</a>
                    </li>
                </ul>
            </form>
            <img src="images/contact/img_contact_mar.png" alt="Un moment detox à la maison...">
        </div>
        
    </article>

    <article id="whereWeR">
        <h2><i class="fas fa-compass"></i>Nous trouver</h2>
        <!-- GOOGLE MAP -->
        <div id="iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.4144319316965!2d4.8250462155674825!3d45.76288407910561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebaaf2f4760d%3A0x73f90c3b63fa0905!2s11+Rue+du+B%C5%93uf%2C+69005+Lyon!5e0!3m2!1sfr!2sfr!4v1545303177141" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <div id="first" class="flex">
            <div id="second" class="flex">
                <ul id="contact-list">
                    <li>
                        <p>Contact</p>
                    </li>
                    <li>
                        <p><i class="fas fa-map-marker-alt"></i>34 rue des fruits</p>
                        <p>69005</p>
                    </li>
                    <li>
                        <p><i class="fas fa-phone-volume"></i>04 22 25 16 66</p>
                    </li>
                    <li>
                        <p><i class="fas fa-paper-plane"></i>contact@wai-smoothie.com</p>
                    </li>
                    <li>
                        <p><i class="fas fa-calendar-alt"></i>Ouvert du lundi au samedi de 08h à 19h (hors jours fériés)</p>
                    </li>
                </ul>
                <ul id="social-medias">
                    <li><a target="_blank" href="https://www.instagram.com/explore/tags/smoothie/?hl=fr"><i class="fab fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.pinterest.fr/atable/jus-smoothies/?lp=true"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/JusSmoothieetCie/?hc_ref=ARREvgNAXbyCXS_sdF3n3YCRjQEtKKJtaIWowbxPgpyjtrcjyfz-sTqvAHBZp2FY6SU&fref=nf&__xts__%5B0%5D=68.ARAyXQVfWoqEUwRgPa6KrvPKwMqp9tGoEQYOb_d3U077yQbyykufTzbUeYaN71ygI9rIHzeMahooB1umiwEbTsZIuaXFEXUtDxM7vI14uZufScRyvGGyIknyhcy6zDxXoT3oQSd3J_nHVCSnwsnOT1mVu8qzvb_8upzflJUBcZHAHd6TCvo8hTvIEA71e5nCk1TgnvCfaiaKi-nJ3XsSSTfcJOt9DmS2_IfNLFkTwrWv8PfbRBmeBvPTZYkMklqjzGNxIwPuDa1_yMRjswC_Cr2_ZbkSpsQS2t0pj-sRkWVUOgZreIyhsBXiX3Wf0JiTI3hkPaes39fmgMrN7F9WHms&__tn__=kC-R"><i class="fab fa-facebook-f"></i></a></li>
                </ul>
            </div>
            <img src="images/contact/img_contact_mar_.png" alt="Des fruits à GOGO!">
        </div>

    </article>
</section>

<?php

    include_once "footer.php";

?>