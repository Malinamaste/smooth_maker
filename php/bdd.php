<?php

// Connexion à la BDD avec le nom de la BDD et les identifiants
$bdd = new PDO('mysql:host=localhost;dbname=wai_smoothie', 'root', 'troiswa',  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]
);
$bdd->exec("SET NAMES UTF8");