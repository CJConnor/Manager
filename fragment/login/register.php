<form class="form-horizontal" action="actions/register.php" method="post">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="fname">First Name: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="forename" id="fname" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="sname">Surname: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="surname" id="sname" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="dob">Dob: </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="dob" id="dob" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="age">Age: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="age" id="age" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="email" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="team">Team: </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="favTeam" id="team" >
                            <?php
                                $result = Team::findAll();
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
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="username">Username: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" id="username" />
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Password: </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>

            </form>