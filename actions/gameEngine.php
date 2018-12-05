<?php

    include"../classes/dbconnect.php";
    include"../classes/game.php";
    include"../classes/system.php";

    $teams = Team::getTeam(2);
    $roster = LineUp::getAllPlayers(2);
    $player = LineUp::getPlayer(280);
    $fixtures = Fixtures::getAllFixtures();



?>