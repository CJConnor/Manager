<?php

    include("../../classes/dbconnect.php");
    include("../../classes/system.php");
    include("../../classes/user.php");

    $username = $_GET['u'];

    $username = DB::getCon()->escape_string($username);

    $query = "username = '$username'";

    $check = User::checkIfUserExists($query);

    if ($check != 0)
        echo "fail";
    else
        echo "success";

    

 ?>
