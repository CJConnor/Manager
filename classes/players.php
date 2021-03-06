<?php

class Players extends System {

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
    public $moral;

    public static $tableName = "players";
    public static $columns = ['id', 'team', 'name', 'age', 'position', 'position_cat', 'market_value', 'fpl_value', 'fpl_sel', 'fpl_points', 'region', 'nationality', 'red', 'injury', 'yellow', 'sub', 'subbed', 'playing', 'moral'];

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
        $this->moral = isset($args['moral']) ? $args['moral'] : "";


    }

    public static function getAllPlayers($path) {
        $data = parent::getJsonFile($path);

        $data = $data->players;

        $count = count($data);

        if($count > 0) {

            $object_array = [];
            foreach($data as $player) {
                $object_array[] = parent::init($player);
            }

        } else {

            exit("Query Failed");

        }

        return $object_array;
    }

    public static function getPlayers($team, $path) {

        $data = parent::getJsonFile($path);

        $data = $data->players;

        $count = count($data);

        if($count > 0 ) {

            $object_array = [];
            foreach($data as $player) {
                if($player->team == $team)
                    $object_array[] = parent::init($player);
            }

        } else {

            exit("Query failed");

        }
      
        return $object_array;

    }

    public static function getPlayer($id, $team) {

        $count = count($team);

        if($count > 0 ) {

            $object_array = "";
            foreach($team as $player) {
                if($player->id == $id) {
                    $object_array = parent::init($player);
                    break;
                }
            }

        } else {

            exit("Query failed");

        }
      
        return $object_array;

    }

    public static function displayValue($value) {

        $value = (int)$value;

        $value = $value * 1000000;

        $value = number_format($value, 0, '.', ',');

        return "£" . $value;

    }

}
?>