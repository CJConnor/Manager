<?php

    $team1_id = $_POST['team1'];
    $team2_id = $_POST['team2'];

    $team1 = Team::findById($team1_id);
    $team2 = Team::findById($team2_id);

    $roster1 = LineUp::getAllPlayers($team1_id);
    $roster2 = LineUp::getAllPlayers($team2_id);

    $fixtures = Fixtures::findAll();

    $team = Team::findAll();
    

    

?>