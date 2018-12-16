<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="_assets/css/CSS.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../functions/functions.js"></script>
    <?php
        include"../classes/dbconnect.php";
        include"../fragment/vars.php";
        include"../classes/system.php";
        include"../classes/team.php";
        include"../classes/lineup.php";
        include"../classes/fixtures.php";
    ?>
</head>
<body>
    <?php include"../fragment/game/gameCore.php"; ?>
    <div class="container">

        <div class="row">

            <div class="col-sm-3">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th colspan="2"><?=$team1->teams?> Line up</th>
                        </tr>
                        <tr>
                            <th>Names</th>
                            <th>Events</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($roster1 as $player) {
                                ?>
                                <tr>
                                    <td><?=$player->name?></td>
                                    <td></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-6">
                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th colspan="2">Match</th>
                                </tr>
                                <tr>
                                    <th>Names</th>
                                    <th>Events</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
            </div>

            <div class="col-sm-3">
                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th colspan="2"><?=$team2->teams?> Line up</th>
                                </tr>
                                <tr>
                                    <th>Names</th>
                                    <th>Events</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($roster2 as $player) {
                                        ?>
                                        <tr>
                                            <td><?=$player->name?></td>
                                            <td></td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-offset-3 col-sm-6">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th colspan="4">Fixtures</th>
                        </tr>
                        <tr>
                            <th>Home</th>
                            <th>Away</th>
                            <th>Score></th>
                            <th>Date Played</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($fixtures as $fixture) {
                                ?>
                                    <tr>
                                        <td><?=$fixture->home;?></td>
                                        <td><?=$fixture->away?></td>
                                        <td><?=$fixture->score;?></td>
                                        <td><?=$fixture->datePlayed?></td>
                                    </tr>
                                <?php
                            }
                        ?>  
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>

    </div>
</body>
</html>
