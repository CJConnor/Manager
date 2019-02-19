

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <?php

            include_once"../classes/dbconnect.php";
            include"../classes/system.php";
            include"../classes/fixtures.php";
            
        ?>
    </head>
    <body>

        <?php 
            $array = Fixtures::matchDates();

            var_dump($array);
        ?>
        <div class="container">

                    <table class="table table-striped table-bordered">

                        <thead>

                            <tr>
                                <th>Teams</th>
                                <th>Home</th>
                                <th>Away</th>
                                <th>Total</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php

                                
                                

                                 $arrayCount = count($array);

                                 echo$arrayCount;
                                 $sql = "SELECT * FROM premier_league";
                                 $result = DB::getCon()->query($sql);
                                 $count = [];

                                 while($row = $result->fetch_assoc()) {

                                     $id = $row['id'];
                                     $name = $row['teams'];
                                    
                                     $count[$id] = ["home" => 0, "away" => 0];

                                     for($i = 0; $i < $arrayCount; $i++) {

                                         if($array[$i]->home == $id) {

                                             $count[$id]["home"]++;

                                         } else if($array[$i]->away == $id) {

                                             $count[$id]["away"]++;

                                         }

                                     }

                                    ?>
                                    
                                    <?php

                                }

                            ?>

                        </tbody>

                            </table>

        </div>

    </body>

</html>