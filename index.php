<?php include("fragment/head.php"); ?>

    <body style="background-color: #eee;">
        <div class="container">
            
            <?php include("fragment/login/login.php"); ?>

        </div>

        <script>
            $(document).ready(function(){
                $("#log_p1").modal({backdrop: 'static', keyboard: false});
            });
        </script>
        
        <script src="_assets/javascript/loginFunctions.js"></script>

    </body>

</html>