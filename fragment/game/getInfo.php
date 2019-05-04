<?php

    $path   = "_assets/javascript/tables/" . $user->tableFile;
    $teams  = Team::getTeams($path);
    
    $team1Id = $user->favTeam;
    $team2Id = rand(1, 20);

    $team1 = Team::getTeam($team1Id, $teams);
    $team2 = Team::getTeam($team2Id, $teams);

    $lineup1 = Players::getPlayers($team1Id, $path);
    $lineup2 = Players::getPlayers($team2Id, $path);

?>