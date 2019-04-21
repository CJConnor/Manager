<?php

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



public static function getTeams($path) {

    $data = self::getJsonFile($path);

    $count = count($data);

    if($count > 0) {

        $object_array = "";
        
        foreach($data as $row) {
            $object_array[] = self::init($row);
        }

        
    }

    return $object_array;
}

public static function getTeam($id, $path) {

    $data = self::getJsonFile($path);

    $count = count($data);

    if($count > 0) {

        $object_array = "";
        
        foreach($data as $row) {
            if($row->id == $id) {
                $object_array = self::init($row);
            }
        }
        
    }


    return $object_array;

}


}
?>