<?php

    class LineUp {

        public $gk;
        public $rb;
        public $rcb;
        public $lcb;
        public $lb;
        public $rm;
        public $cdm;
        public $cam;
        public $lm;
        public $cf;
        public $sk;

        public function __construct($args=[]) {
            
            $this->gk = isset($args['gk']) ? $args['gk'] : 0;
            $this->rb = isset($args['rb']) ? $args['rb'] : 0;
            $this->rcb = isset($args['rcb']) ? $args['rcb'] : 0;
            $this->lcb = isset($args['lcb']) ? $args['lcb'] : 0;
            $this->lb = isset($args['lb']) ? $args['lb'] : 0;
            $this->rm = isset($args['rm']) ? $args['rm'] : 0;
            $this->cdm = isset($args['cdm']) ? $args['cdm'] : 0;
            $this->cam = isset($args['cam']) ? $args['cam'] : 0;
            $this->lm = isset($args['lm']) ? $args['lm'] : 0;
            $this->cf = isset($args['cf']) ? $args['cf'] : 0;
            $this->sk = isset($args['sk']) ? $args['sk'] : 0;

        }
        
        public static function getLineup($team) {
         
            usort($team, function($a, $b) {
                return = $a['fpl_points'] <=> $b['fpl_points'];
            });
            
            
            
        }

    }

?>
