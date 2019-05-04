<?php include("fragment/head.php"); ?>

    <body>

        <?php include("fragment/game/getInfo.php"); ?>

        <div class="container">
            <div class="row">

                <table class="table table-striped col-sm-4">
                    <thead>
                        <tr>
                            <th colspan="3"><?=$team1->teams?></th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($lineup1 as $player) {
                                ?>
                                <tr>
                                    <td><?=$player->name?></td>
                                    <td><?=$player->position?></td>
                                    <td><?=Team::getTeam($player->team, $teams)->teams;?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="col-sm-4"></div>
                <table class="table table-striped col-sm-4">
                    <thead>
                        <tr>
                            <th colspan="3"><?=$team2->teams?></th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($lineup2 as $player) {
                                ?>
                                <tr>
                                    <td><?=$player->name?></td>
                                    <td><?=$player->position?></td>
                                    <td><?=Team::getTeam($player->team, $teams)->teams;?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
                

            </div>
        </div>                      
    </body>

</html>