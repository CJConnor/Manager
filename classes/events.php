<?php

    class Events extends System {

        public $id;
        public $event;
        public $playerOne;
        public $playerTwo;
        public $fixtId;
        public $teamId;
        public $gt;

        public static $tableName = "events";
        public static $columns = ['id', 'event', 'playerOne', 'playerTwo', 'fixtId', 'teamId', 'gt'];

        public function __construct($args=[]) {

            $this->id = isset($args['id']) ? $args['id'] : "";
            $this->event = isset($args['event']) ? $args['event'] : "";
            $this->playerOne = isset($args['playerOne']) ? $args['playerOne'] : "";
            $this->playerTwo = isset($args['playerTwo']) ? $args['playerTwo'] : "";
            $this->fixtId = isset($args['fixtId']) ? $args['fixtId'] : "";
            $this->teamId = isset($args['teamId']) ? $args['teamId'] : "";
            $this->gt = isset($args['gt']) ? $args['gt'] : "";

        }

    }

?>