<?php

require_once"dbconnect.php";

class Team extends System {

public $id;
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

public static $tableName = "premier_league";
public static $columns = ['id', 'position', 'teams', 'plays', 'wins', 'draws', 'losses', 'points', 'goal_difference', 'logo', 'subs'];

public function __construct($args=[]) {

    $this->id = isset($args['id']) ? $args['id'] : "";
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

public static function getTeam($id) {

    $sql = "SELECT * FROM premier_league WHERE id = '$id'";
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
?>