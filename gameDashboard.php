<?php include("fragment/head.php"); ?>

    <body>

        <?php include("fragment/nav.php"); ?>

        <div class="container mt-3">
            <h2>Game</h2>
            <br>
            <?php
                $teamid  = $user->favTeam;
                $path    = "_assets/javascript/tables/" . $user->tableFile;
                $teams   = Team::getTeams($path); 
                $team    = Team::getTeam($teamid, $teams);
                $lineup  = Players::getPlayers($teamid, $path);
                $players = Players::getAllPlayers($path)

            ?>
            <?php include("fragment/gameDashboard/tab-nav.html"); ?>
            <?php include("fragment/gameDashboard/tab-content.php"); ?>
        </div>


    </body>

    <script>

        function gameButton() {

            return window.location.href = 'game.php';

        }

    </script>

<html>