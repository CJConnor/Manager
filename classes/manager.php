<?php

    Class Manager extends System{

        public $id;
        public $name;
        public $managerAttribute;
        public $userid;
        public $date;

        public static $tableName = "managers";
        public static $columns   = ["id", "name", "managerAttribute", "userid", "date"] ;

        public function __construct($args=[]) {

            $this->id = isset($args['id']) ? $args['id'] : "";
            $this->name = isset($args['name']) ? $args['name'] : "";
            $this->managerAttribute = isset($args['managerAttribute']) ? $args['managerAttribute'] : 0;
            $this->userid = isset($args['userid']) ? $args['userid'] : 0;
            $this->date = isset($args['date']) ? $args['date'] : date("Y-m-d");
            
        }




    }

?>