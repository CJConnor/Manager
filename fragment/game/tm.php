<div class="list col-sm-5">
<?php
    $teamId = $user->favTeam;
    $file   = $user->tableFile;
    $path   = "_assets/javascript/tables/" . $file;

    $players = Players::getPlayers($teamId, $path);

    $content = "";

    foreach ($players as $player) {

    $name = $player->name;
    $position = $player->position;
    $age = $player->age;
    $moral = $player->moral;
    $fpl = $player->fpl_points;

    $content .= "<div class='row'>
                    <table class='table'>
                    <thead>
                        <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Moral</th>
                        <th>Skill</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>" . $name . "</td>
                        <td>" . $age . "</td>
                        <td>" . $moral . "</td>
                        <td>" . $fpl . "</td>
                        </tr>
                    </tbody>
                    </table>

                </div>";

    }
    echo $content;
?>
</div>

<div class="col-sm-1">

</div>

<div class="col-sm-5">
 <img src='_assets/images/football-pitch.jpg'/>
</div>
       