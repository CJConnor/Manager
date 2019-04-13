<?php

    include("../../classes/dbconnect.php");
    include("../../classes/system.php");
    include("../../classes/user.php");
    include("../../classes/manager.php");

    $user    = new User($_POST);
    $userid  = $user->save();

    $_POST['userid'] = $userid;

    $manager = new Manager($_POST);
    $manid   = $manager->save();
    
    if (!empty($userid) && !empty($manid))
        echo("success");
    else
        echo("error");


    
?>