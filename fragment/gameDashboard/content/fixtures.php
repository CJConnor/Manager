<div id="fixt" class="container tab-pane fade"><br>
    <h3>Fixtures</h3>
    
    <div class="row">

        <table class="table">
            <thead>
                <tr>
                    <th>Home</th>
                    <th>Away</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $fixtures = Fixtures::getFixtures($user->tableFile);

                    var_dump($fixtures);

                    foreach ($fixtures as $fixture) : ?>
                        <tr>
                            <td><?=Team::getTeam($fixture->home, $teams)->teams;?></td>
                            <td><?=Team::getTeam($fixture->away, $teams)->teams;?></td>
                            <td><?=date('d/m/Y', strtotime($fixture->datePlayed));?></td>
                        </tr>
                    <?php endforeach;
                    
                ?>
            </tbody>
        </table>

    </div>


</div>