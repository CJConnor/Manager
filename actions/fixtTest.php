<?php

    include_once"../classes/dbconnect.php";
    include"../classes/system.php";
    include"../classes/fixtures.php";

    $array = Fixtures::matchDates();

    print_r($array);

    $HT = $_POST['HT'];
    $AT = $_POST['AT'];

    $c = 0;
    $game = [];

    $count = count($array);

    for($i = 0; $i < $count; $i++) {

        if($array[$i]->home == $HT && $array[$i]->away == $AT) {

            $c++;
            $game[] = $array[$i];

        }

    }

    echo($c);

    var_dump($game);

?>