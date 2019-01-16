<?php

    include_once"../classes/dbconnect.php";
    include"../classes/system.php";
    include"../classes/fixtures.php";

    $array = Fixtures::matchDates();

    print_r($array);

    $HT = $_POST['HT'];
    $AT = $_POST['AT'];

    $count = Fixtures::findGameNum($array, $HT, $AT);

    echo($count);

?>