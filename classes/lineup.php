<?php

class LineUp extends System {

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

    public static $tableName = "players";
    public static $columns = ['id', 'team', 'name', 'age', 'position', 'position_cat', 'market_value', 'fpl_value', 'fpl_sel', 'fpl_points', 'region', 'nationality', 'red', 'injury', 'yellow', 'sub', 'subbed', 'playing'];

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

    public static function getAllPlayers($team) {

        $sql = "SELECT * FROM " . self::$tableName . " WHERE team = '$team'";
        $result = DB::getCon()->query($sql);
        $count = $result->num_rows;

        if($count > 0 ) {

            $object_array = [];
            while($record = $result->fetch_assoc()) {
                $object_array[] = parent::init($record);
            }

        } else {

            exit("Query failed");

        }
      
        return $object_array;

    }

    // public static function getPlayer($id) {

    //     $sql = "SELECT * FROM players WHERE id = '$id'";
    //     $result = System::findBySql($sql);
    //     $num_rows = $result->num_rows;

    //     if($num_rows > 0) {

    //         $object_array = "";
            
    //         while($rows = $result->fetch_assoc()) {
    //             $object_array = self::init($rows);
    //         }

    //         #$result->free;
            
    //     }

    //     return $object_array;

    // }

}
?>