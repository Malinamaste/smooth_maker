<?php

include_once "classes/user.class.php";

$user = new User();
$user->destroy();

header("Location: ../main.php");
exit();