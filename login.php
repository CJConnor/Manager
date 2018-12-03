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

            <br />
            <br />

            <div id="errorMessage" class="alert alert-danger">
                <strong>Oh no!!</strong> It appears something has gone wrong... please try again
            </div>
            
            <form class="form-horizontal">

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