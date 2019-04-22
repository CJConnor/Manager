<modal class="modal fade" id="reg_p1">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="#" method="post" id="1">

                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" class="form-control" name="username" id="username" required/>
                </div>


                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" class="form-control" name="password" id="password" required/>
                </div>

                <div class="form-group" >
                    <label for="conPass">Confirm Password: </label>
                    <input type="password" class="form-control" name="conPass" id="conPass" onchange="confirmPassword()" required/>
                </div>

                <div class="form-group">
                    <label for="team">Team: </label>
                    <select class="form-control" name="favTeam" id="team" required >
                        <option></option>
                        <?php
                            $result = Team::getTeams("_assets/javascript/master/premier_league.json");
                            foreach($result as $team) {

                                $name = $team->teams;
                                $id = $team->id;

                                ?>
                                <option value="<?=$id?>"><?=$name?></option>
                                <?php

                            }
                        ?>
                    </select>
                </div>

            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit" onclick="submit(this);">Submit</button>
        </div>
        
      </div>
    </div>
</modal>