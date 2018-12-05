<?php

class Team {

    public $position;
    public $teams;
    public $plays;
    public $wins;
    public $draws;
    public $losses;
    public $points;
    public $goal_difference;
    public $logo;
    public $subs;

    public function __construct($args=[]) {

        $this->position = isset($args['position']) ? $args['position'] : "";
        $this->teams = isset($args['teams']) ? $args['teams'] : "";
        $this->plays = isset($args['plays']) ? $args['plays'] : "";
        $this->wins = isset($args['wins']) ? $args['wins'] : "";
        $this->draws = isset($args['draws']) ? $args['draws'] : "";
        $this->losses = isset($args['losses']) ? $args['losses'] : "";
        $this->points = isset($args['points']) ? $args['points'] : "";
        $this->goal_difference = isset($args['goal_difference']) ? $args['goal_difference'] : "";
        $this->logo = isset($args['logo']) ? $args['logo'] : "";
        $this->subs = isset($args['subs']) ? $args['subs'] : "";
        
    }

    public static function init($team) {

        $object = new self;

        foreach($team as $property => $value) {
            if(property_exists($object, $property)) {
              $object->$property = $value;
            }
          }
          return $object;
    }

    
    public static function create() {


    }

    public static function getTeam($id) {

        $sql = "SELECT * FROM premier_league WHERE position = '$id'";
        $result = System::findBySql($sql);
        $num_rows = $result->num_rows;

        if($num_rows > 0) {

            $object_array = [];
            
            while($rows = $result->fetch_assoc()) {
                $object_array[] = self::init($rows);
            }

            #$result->free;
            
        }

        return $object_array;
    }


}

class LineUp {

    public $id;
    public $team;
    public $name;
    public $age;
    public $position;
    public $position_cat;
    public $market_value;
    public $fpl_value;
    public $fpl_sel;
    public $fpl_points;
    public $region;
    public $nationality;
    public $red;
    public $injury;
    public $yellow;
    public $sub;
    public $subbed;
    public $playing;

    public function __construct($args=[]) {

        $this->id = isset($args['id']) ? $args['id'] : "";
        $this->team = isset($args['team']) ? $args['team'] : "";
        $this->name = isset($args['name']) ? $args['name'] : "";
        $this->age = isset($args['age']) ? $args['age'] : "";
        $this->position = isset($args['position']) ? $args['position'] : "";
        $this->position_cat = isset($args['position_cat']) ? $args['position_cat'] : "";
        $this->market_value = isset($args['market_value']) ? $args['market_value'] : "";
        $this->fpl_value = isset($args['fpl_value']) ? $args['fpl_value'] : "";
        $this->fpl_sel = isset($args['fpl_sel']) ? $args['fpl_sel'] : "";
        $this->fpl_points = isset($args['fpl_points']) ? $args['fpl_points'] : "";
        $this->region = isset($args['region']) ? $args['region'] : "";
        $this->nationality = isset($args['nationality']) ? $args['nationality'] : "";
        $this->red = isset($args['red']) ? $args['red'] : "";
        $this->injury = isset($args['injury']) ? $args['injury'] : "";
        $this->yellow = isset($args['yellow']) ? $args['yellow'] : "";
        $this->sub = isset($args['sub']) ? $args['sub'] : "";
        $this->subbed = isset($args['subbed']) ? $args['subbed'] : "";
        $this->playing = isset($args['playing']) ? $args['playing'] : "";


    }

    public static function init($player) {

        $object = new self;

        foreach($player as $property => $value) {
            if(property_exists($object, $property)) {
              $object->$property = $value;
            }
          }
          return $object;
    }

    public static function getAllPlayers($team) {

        $sql = "SELECT * FROM players WHERE team = '$team'";
        $result = System::findBySql($sql);
        $num_rows = $result->num_rows;

        if($num_rows > 0) {

            $object_array = [];
            
            while($rows = $result->fetch_assoc()) {
                $object_array[] = self::init($rows);
            }

            #$result->free;
            
        }

        return $object_array;
    }

    public static function getPlayer($id) {

        $sql = "SELECT * FROM players WHERE id = '$id'";
        $result = System::findBySql($sql);
        $num_rows = $result->num_rows;

        if($num_rows > 0) {

            $object_array = "";
            
            while($rows = $result->fetch_assoc()) {
                $object_array = self::init($rows);
            }

            #$result->free;
            
        }

        return $object_array;

    }

}

class Fixtures {

    public $id;
    public $home;
    public $away;
    public $score;
    public $datePlayed;

    public function __construct($args=[]) {
        $this->id = isset($args['id']) ? $args['id'] : "";
        $this->home = isset($args['home']) ? $args['home'] : "";
        $this->away = isset($args['away']) ? $args['away'] : "";
        $this->score = isset($args['score']) ? $args['score'] : "";
        $this->datePlayed = isset($args['datePlayed']) ? $args['datePlayed'] : "";
    }

    public static function init($fixture) {

        $object = new self;

        foreach($fixture as $property => $value) {
            if(property_exists($object, $property)) {
              $object->$property = $value;
            }
          }
          return $object;
    }

    public static function getAllFixtures() {

        $sql = "SELECT * FROM fixtures";
        $result = System::findBySql($sql);
        $num_rows = $result->num_rows;

        if($num_rows > 0) {

            $object_array = [];
            
            while($rows = $result->fetch_assoc()) {
                $object_array[] = self::init($rows);
            }

            #$result->free;
            
        }

        return $object_array;
    }

}


?>