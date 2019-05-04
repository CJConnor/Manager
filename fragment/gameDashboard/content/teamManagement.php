<div id="tm" class="container tab-pane fade"><br>
    <h3>Team Management</h3>
    
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th colspan="7" style="text-align: center;">Roster</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Position</th>
					<th>Nationality</th>
					<th>Market Value</th>
					<th>Moral</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($lineup as $player) {
                        ?>
                            <tr>
                                <td><?=$player->name;?></td>
                                <td><?=$player->age;?></td>
                                <td><?=$player->position;?></td>
								<td><?=$player->nationality;?></td>
								<td><?=Players::displayValue($player->market_value)?></td>
								<td><?=$player->moral?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
        
    </div>
    <div class="row">
        
		<table class="table table-striped">
			<thead>
				<tr>
					<th colspan="7" style="text-align: center;">Players</th>
				</tr>
				<tr>
					<th>Name</th>
					<th>Age</th>
					<th>Position</th>
					<th>Nationality</th>
					<th>Team</th>
					<th>Market Value</th>
					<th>Moral</th>
			</thead>
			<tbody>
				<?php
					foreach($players as $player) {
						?>
							<tr>
								<td><?=$player->name;?></td>
								<td><?=$player->age;?></td>
								<td><?=$player->position;?></td>
								<td><?=$player->nationality;?></td>
								<td><?=Team::getTeam($player->team, $teams)->teams?></td>
								<td><?=Players::displayValue($player->market_value)?></td>
								<td><?=$player->moral?></td>
							</tr>
						<?php
					}
				?>
			</tbody>
		</table>
        
    </div>
</div>