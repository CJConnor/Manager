<!DOCTYPE html>

<html>

    <head>
        <!-- Meta Data -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="_assets/css/CSS.css" />

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <!-- PHP Includes -->
        <?php include("fragment/vars.php");?>
        <?php include("classes/dbconnect.php");?>
        <?php include("classes/system.php");?>
        <?php include("classes/team.php");?>
        <?php include("classes/user.php");?>
        <?php include("classes/lineup.php");?>
        <?php include("classes/players.php");?>
    </head>

    <body style="background-color: #eee;">
        <div class="container">
            
            <?php include("fragment/login/register_p1.php"); ?>

            <?php include("fragment/login/register_p2.php"); ?>

            <?php include("fragment/login/register_p3.php"); ?>

            <?php include("fragment/login/register_p4.php"); ?>

            <?php include("fragment/login/form.html"); ?>

        </div>

        <script>
            $(document).ready(function(){
                $("#reg_p1").modal({backdrop: 'static', keyboard: false});
            });
        </script>
        <script src="_assets/javascript/loginFunctions.js"></script>

    </body>

</html>