<?php

class Fixtures extends System{

    public $id;
    public $home;
    public $away;
    public $score;
    public $datePlayed;
    public $uid;

    public static $tableName = "fixtures";
    public static $columns = ['id', 'home', 'away', 'score', 'datePlayed', 'uid'];

    public function __construct($args=[]) {
        $this->id = isset($args['id']) ? $args['id'] : "";
        $this->home = isset($args['home']) ? $args['home'] : "";
        $this->away = isset($args['away']) ? $args['away'] : "";
        $this->score = isset($args['score']) ? $args['score'] : "";
        $this->datePlayed = isset($args['datePlayed']) ? $args['datePlayed'] : "";
        $this->uid = isset($args['uid']) ? $args['uid'] : "";
    }


    public static function matchDates() {

        $seasonStart = "2017-08-14";
        $seasonEnd = "2018-05-13";
        $amountOfGames = 38;

        $fixt = [];

        $sql = "SELECT id FROM premier_league ORDER BY RAND()";
        $result = DB::getCon()->query($sql);

        $teamArray = [];

        if($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                $id = $row['id'];

                $teamArray[] = $id;

            }

        }

        for($i = 0; $i < 19; $i++) {

            foreach($teamArray as $team) {                   

                $fixtTeam = ['home' => $team];


                $fixture = new Fixtures($fixtTeam);

                array_push($fixt, $fixture);

            }

        }

        $fixtCount = count($fixt);

        for($i = 0; $i < 19; $i++) {

            foreach($teamArray as $team) {

                for($j = 0; $j < $fixtCount; $j++) {

                    $HT = $fixt[$j]->home;
                    $AT = $fixt[$j]->away;

                    $away = Fixtures::findGameNum($fixt, $HT, $team);

                    if($HT != $team && empty($AT)) {

                        if($away < 1) {

                            $fixt[$j]->away = $team;
                        }

                    }

                }

            }

        }

        $orgFixt = [];
        $tracker = [];

        for($j = 0; $j < 76; $j++) {

            $orgFixt[$j] = [];

            for($i = 0; $i < $fixtCount; $i++) {

                if($i == 0 || $i == 1 || 5 % $i != 0) {

                    if($j != 0) {

                        

                    }
    
                    if(!in_array($fixt[$i], $orgFixt[$j])) {

                        $orgFixt[$j][] = $fixt[$i];

                    } else {

                        continue;

                    }
    
                } else {

                    break;

                }
    
            }

        }

        


        return $orgFixt;

    }

    public static function findGameNum($array, $HT, $AT) {

        $c = 0;

        $count = count($array);

        for($i = 0; $i < $count; $i++) {

            if($array[$i]->home == $HT && $array[$i]->away == $AT) {

                $c++;

            }

        }

        return $c;

    }
    
}


?>