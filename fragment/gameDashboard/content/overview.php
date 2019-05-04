<div id="home" class="container tab-pane active"><br>
    <h3>HOME</h3>
    <br />
    <div class="row">
        <button onclick="gameButton();" class="btn btn-primary col-sm-6"><h1>Play Next Game!!!</h1></button>
        <div class="col-sm-4"></div>
        <img src="_assets/images/tlogos/<?=$team->logo;?>" style="height: 120px; text-align: center;" />
    </div>
    <br />
    <div class="row">
        <table class="table table-striped col-sm-8">
            <thead>
                <tr>
                    <th colspan="8" style="text-align: center;">League Table</th>
                </tr>
                <tr>
                    <th>Logo</th>
                    <th>Team</th>
                    <th>Plays</th>
                    <th>Wins</th>
                    <th>Draws</th>
                    <th>Losses</th>
                    <th>GD</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($teams as $team) {
                        ?>
                            <tr>
                                <td><img src="_assets/images/tlogos/<?=$team->logo;?>" style="height: 64px;" /></td>
                                <td><?=$team->teams;?></td>
                                <td><?=$team->plays;?></td>
                                <td><?=$team->wins;?></td>
                                <td><?=$team->draws;?></td>
                                <td><?=$team->losses;?></td>
                                <td><?=$team->goal_difference;?></td>
                                <td><?=$team->points;?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="col-sm-1"></div>
        <table class="table table-striped col-sm-3">
            <thead>
                <tr>
                    <th colspan="4" style="text-align: center;">Past Fixtures</th>
                </tr>
                <tr>
                    <th>Home</th>
                    <th>Away</th>
                    <th>Score</th>
                    <th>Date Played</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">No results</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>