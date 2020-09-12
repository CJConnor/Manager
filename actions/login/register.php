<?php

    session_start();

    include("../../classes/dbconnect.php");
    include("../../classes/system.php");
    include("../../classes/user.php");
    include("../../classes/manager.php");
    include("../../classes/team.php");
    include("../../classes/fixtures.php");

    $userid = User::createUser($_POST);

    $_POST['userid'] = $userid;

    $manager = new Manager($_POST);
    $manid   = $manager->save();

    $user = User::findById($userid);

    Fixtures::matchDates($user->tableFile);
    
    echo !empty($user) && !empty($manid) ? "success" : "error";

    setcookie('userid', $userid, time() + 86400);

    
?>