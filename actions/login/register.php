<?php

    session_start();

    include("../../classes/dbconnect.php");
    include("../../classes/system.php");
    include("../../classes/user.php");
    include("../../classes/manager.php");

    $user = User::createUser($_POST);

    $_POST['userid'] = $user;

    $manager = new Manager($_POST);
    $manid   = $manager->save();
    
    if (!empty($user) && !empty($manid))
        echo("success");
    else
        echo("error");

    $_COOKIE['userid'] = $user;

    
?>