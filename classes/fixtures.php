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
        $array = [];

        for($j = 0; $j < 76; $j++) {

            $orgFixt[$j] = [];

            for($i = 0; $i < $fixtCount; $i++) {

                if($i == 0 || $i == 1 || 5 % $i != 0) {

                    if(empty($tracker)) {

                        $orgFixt[$j][] = $fixt[$i];
                        $tracker[] = ["home" => $fixt[$i]->home, "away" => $fixt[$i]->away, "element" => $j];

                    } else {

                        $gameCheck = self::gameCheck($tracker, $orgFixt, $j, $fixt[$i]);

                        $array[] = [$gameCheck, $fixt[$i]];

                        if($gameCheck == "success") {

                            $orgFixt[$j][] = $fixt[$i];
                            $tracker[] = ["home" => $fixt[$i]->home, "away" => $fixt[$i]->away, "element" => $j];

                        }

                    }
    
                } else {

                    break;

                }
    
            }

        }

        
        //var_dump($array);

        return $orgFixt;

    }

    public static function check_if_game_exists($tracker, $fixture) {

        foreach($tracker as $tracked) {

            if($tracked['home'] == $fixture->home && $tracked['away'] == $fixture->away) {

                return(false);

            } elseif($tracked['home'] == $fixture->away && $tracked['away'] == $fixture->home) {

                $calc = ($tracked['element'] / 76) * 100;

                if($calc >= 50) {

                    return(true);

                } else {

                    return(false);

                }

            }

        }

    }

    public static function gameCheck($tracker, $orgFixt, $turn, $fixture) {

        $check_if_game_exists = self::check_if_game_exists($tracker, $fixture);

        // $newTurn = $turn - 1;

        // foreach($tracker as $tracked) {

        //     if($tracked['home'] == $fixture->home && $tracked['away'] == $fixture->away) {

        //         return("Game Already Exists");

        //     } elseif($tracked['home'] == $fixture->away && $tracked['away'] == $fixture->home) {

        //         $calc = ($tracked['element'] / 76) * 100;

                

        //         if($calc >= 50) {

        //             return("success");

        //             foreach($orgFixt[$turn] as $fix) {

        //                 if($fix->home == $fixture->home || $fix->away == $fixture->home || $fix->home == $fixture->away || $fix->away == $fixture->home) {

        //                     return("Already Played Today");

        //                 }

        //             }

        //             foreach($orgFixt[$newTurn] as $fix) {

        //                 if($fix->home == $fixture->home || $fix->away == $fixture->home || $fix->home == $fixture->away || $fix->away == $fixture->home) {

        //                     return("Already Played Yesterday");

        //                 }

        //             }


        //         } else {

        //             return("Not 50 yet");

        //         }

        //     } else {

        //         foreach($orgFixt[$turn] as $fix) {

        //             if($fix->home == $fixture->home || $fix->away == $fixture->home || $fix->home == $fixture->away || $fix->away == $fixture->home) {

        //                 return("Already Played Today");

        //             }

        //         }

        //         foreach($orgFixt[$newTurn] as $fix) {

        //             if($fix->home == $fixture->home || $fix->away == $fixture->home || $fix->home == $fixture->away || $fix->away == $fixture->home) {

        //                 return("Already Played Yesterday");

        //             }

        //         }
                
        //     }

        //}

        if($check_if_game_exists) {
            
            return("success");

        }
        

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