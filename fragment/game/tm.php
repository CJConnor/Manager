<modal class="modal fade" id="tm">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Pick Your Team</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" >
            
          <div class="formBox col-sm-5">
            Hi
          </div>

          <div class="col-sm-1">
            Hello
          </div>

          <div class="list col-sm-4">
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

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="submit(this);">Submit</button>
        </div>
        
      </div>
    </div>
</modal>