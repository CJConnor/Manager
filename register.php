<!DOCTYPE html>
<html>
    <head>
        <?php
            include"fragment/head.php";  
        ?>
    </head>
    <body style="background-color: #eee;">

        <div class="container">

            <div class="col-sm-offset-1">
                <img src="_assets/images/logo/high-res/logo-transparent.png" alt="The manager logo" style="height:260px; width: 1000px;" />
            </div>
            
            <form class="form-horizontal">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="fname">First Name: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="fname" id="fname" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="sname">Surname: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sname" id="sname" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="username">Email: </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" id="email" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="username">Team: </label>
                    <div class="col-sm-10">
                        <select class="form-control" name="team" id="team" >
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
                        <button class="btn btn-primary" onclick="submitLoginForm();" type="submit">Submit</button>
                    </div>
                </div>

            </form>

        </div>

    </body>
</html>