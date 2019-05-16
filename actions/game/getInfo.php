<?php

    include("../../classes/dbconnect.php");
    include("../../classes/system.php");
    include("../../classes/team.php");
    include("../../classes/players.php");
    include("../../classes/lineup.php");
    include("../../classes/user.php");



    // $path   = "../../_assets/javascript/tables/" . $user->tableFile;
    // $teams  = Team::getTeams($path);
    
    // $team1Id = $user->favTeam;
    // $team2Id = rand(1, 20);

    // $team1 = Team::getTeam($team1Id, $teams);
    // $team2 = Team::getTeam($team2Id, $teams);

    // $lineup1 = Players::getPlayers($team1Id, $path);
    // $lineup2 = Players::getPlayers($team2Id, $path);

    // $lineup3 = LineUp::getLineUp($lineup1);
    // $lineup4 = LineUp::getLineUp($lineup2);

    // $lineup = ['GK' => $lineup3->gk, 'RB' => $lineup3->rb, 'RCB' => $lineup3->rcb, 'LCB' => $lineup3->lcb, 'LB' => $lineup3->lb, 'RM' => $lineup3->rm, 'CDM' => $lineup3->cdm, 'CAM' => $lineup3->cam, 'LM' => $lineup3->lm, 'CF' => $lineup3->cf, 'SS' => $lineup3->sk];

    //                         foreach ($lineup as $player) {

    //                             $p = Players::getPlayer($player, $lineup1);
    //                             $name = $p->name;
    //                             $position = $p->position;
    //                             $team = Team::getTeam($p->team, $teams)->teams;
    //                             ?>
    //                             <tr>
    //                                 <td><?=$name?></td>
    //                                 <td><?=$position?></td>
    //                                 <td><?=$team?></td>
    //                             <?php

    //                         }

?>