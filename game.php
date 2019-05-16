<?php include("fragment/head.php"); ?>

    <body>

        <?php include("fragment/nav.php"); ?>

        <div class="container">
            <div class="row">

                <table class="table table-striped col-sm-4" style="display: none;">
                    <thead>
                        <tr>
                            <th colspan="3"><?=$team1->teams?></th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                    </tbody>
                </table>
                <div class="col-sm-4"></div>
                <table class="table table-striped col-sm-4" style="display: none;">
                    <thead>
                        <tr>
                            <th colspan="3"></th>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Team</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                

            </div>
        </div>    

        <?php include("fragment/game/tm.php"); ?>
        
        <script>
            $(document).ready(function(){
                $("#tm").modal({backdrop: 'static', keyboard: false});
            });
        </script>

    </body>

</html>