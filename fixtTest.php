<html>
    <head>
        <?php include"fragment/head.php"; ?>
    </head>
    <body>
        
        <form action="actions/fixtTest.php" method="POST">
        
            <select name="HT">
                <?php

                    $sql = "SELECT * FROM premier_league";
                    $result = DB::getCon()->query($sql);
                    
                    while($row = $result->fetch_assoc()) {

                        $id = $row['id'];
                        $team = $row['teams'];

                        ?>

                        <option value='<?=$id?>'><?=$team?></option>

                        <?php
                    }

                ?>
            </select>
            
            <select name="AT">
                <?php

                    $sql = "SELECT * FROM premier_league";
                    $result = DB::getCon()->query($sql);
                    
                    while($row = $result->fetch_assoc()) {

                        $id = $row['id'];
                        $team = $row['teams'];

                        ?>
                        
                        <option value='<?=$id?>'><?=$team?></option>

                        <?php
                    }

                ?>
            </select>
            
            <input type="submit" />
            
        </form>

    </body>
</html>