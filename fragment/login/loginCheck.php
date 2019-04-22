<?php

    $basename = basename($_SERVER['PHP_SELF']);

    if($basename != "index.php") {

        $check = isset($_COOKIE['userid']) ? true : false;

        if (!$check)
            header("Location: index.php");
        else
            $user = User::findById($_COOKIE['userid']);


    }

?>