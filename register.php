<?php include("fragment/head.php"); ?>

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