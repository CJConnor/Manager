<?php include("fragment/head.php"); ?>

    <body>

        <?php include("fragment/nav.php"); ?>

        <div class="container mt-3">
            <h2>Game</h2>
            <br>
            <?php
                $teamid = $user->favTeam;
                $team   = Team::getTeam($teamid, "_assets/javascript/master/premier_league.json");

            ?>
            <?php include("fragment/gameDashboard/tab-nav.html"); ?>
            <?php include("fragment/gameDashboard/tab-content.php"); ?>
        </div>


    </body>

<html>