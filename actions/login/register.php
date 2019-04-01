<?php

    include("../classes/dbconnect.php");
    include("../classes/system.php");
    include("../classes/user.php");

    $args = $_POST;

    $email = $args['email'];

    $query = "email = '$email'";

    $check = User::checkIfUserExists($query);

    if($check == 0)
        $user = User::createUser($args);
    else
        echo("fail");

?>