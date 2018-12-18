<?php

$page = "recipes";
include_once "header.php";

?>

<section id="main-background">

    <?php foreach($recipes as $recipe): ?>

        <article>
            <h2><?php $recipe["name"] ?><h2>
        </article>

    <?php endforeach; ?>

</section>

<?php

include_once "footer.php";

?>