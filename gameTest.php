<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include"fragment/head.php"; ?>
</head>
<body>
    <form action="actions/gameEngine.php" method="post">
        <label for="team1">Team 1</label>
        <select name="team1" id="team1">
            <?php
                $sql = "SELECT * FROM premier_league";
                $result = DB::getCon()->query($sql);
                $count = $result->num_rows;

                if($count > 0) {

                    while($row = $result->fetch_assoc()) {

                        ?>
                        <option value="<?=$row['position'];?>"><?=$row['teams'];?></option>
                        <?php

                    }

                }
            ?>
        </select>

        <label for="team2">Team 2</label>
        <select name="team2" id="team2">
            <?php
                $sql = "SELECT * FROM premier_league";
                $result = DB::getCon()->query($sql);
                $count = $result->num_rows;

                if($count > 0) {

                    while($row = $result->fetch_assoc()) {

                        ?>
                        <option value="<?=$row['position'];?>"><?=$row['teams'];?></option>
                        <?php

                    }

                }
            ?>
        </select>

        <input type="submit" />
    </form>
</body>
</html>