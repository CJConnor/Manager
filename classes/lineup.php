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
            
            $this->gk  = isset($args['GK']) ? $args['GK'] : 0;
            $this->rb  = isset($args['RB']) ? $args['RB'] : 0;
            $this->rcb = isset($args['RCB']) ? $args['RCB'] : 0;
            $this->lcb = isset($args['LCB']) ? $args['LCB'] : 0;
            $this->lb  = isset($args['LB']) ? $args['LB'] : 0;
            $this->rm  = isset($args['RM']) ? $args['RM'] : 0;
            $this->cdm = isset($args['CDM']) ? $args['CDM'] : 0;
            $this->cam = isset($args['CAM']) ? $args['CAM'] : 0;
            $this->lm  = isset($args['LM']) ? $args['LM'] : 0;
            $this->cf  = isset($args['CF']) ? $args['CF'] : 0;
            $this->sk  = isset($args['SS']) ? $args['SS'] : 0;

        }

        public static function getLineUp($team) {

            usort($team, function($a, $b) {
                return $b->fpl_points <=> $a->fpl_points;
            });

            $lineup = array();

            foreach($team as $player) {

                $id           = $player->id;
                $position     = $player->position;
                $position_cat = $player->position_cat;

                if ($position == "GK" && !isset($lineup['GK']))
                    $lineup['GK'] = $id;
                else if ($position == "CB" && !isset($lineup['RCB']))
                    $lineup['RCB'] = $id;
                else if ($position == "CB" && !isset($lineup['LCB']))
                    $lineup['LCB'] = $id;
                else if ($position == "RB" || $position_cat == "3" && !isset($lineup['RB']) && isset($lineup['RCB']) && isset($lineup['LCB']))
                    $lineup['RB'] = $id;
                else if ($position == "LB" || $position_cat == "3" && !isset($lineup['LB']) && isset($lineup['RCB']) && isset($lineup['LCB']))
                    $lineup['LB'] = $id;
                else if ($position == "DM" || $position_cat == "2" && !isset($lineup['CDM']) && $position != "RM" && $position != "RW")
                    $lineup['CDM'] = $id;
                else if ($position == "AM" || $position_cat == "2" && !isset($lineup['CAM']) && $position != "RM" && $position != "RW")
                    $lineup['CAM'] = $id;
                else if ($position == "RM" || $position == "RW" || $position_cat == "2" && !isset($lineup['RM']))
                    $lineup['RM'] = $id;
                else if ($position == "LM" || $position == "LW" || $position_cat == "2" && !isset($lineup['LM']))
                    $lineup['LM'] = $id;
                else if ($position == "CF"  && !isset($lineup['CF']))
                    $lineup['CF'] = $id;
                else if ($position == "SS" || $position_cat == "1" && !isset($lineup['SS']))
                    $lineup['SS'] = $id;
                
                
            }

            $lineup1 = new LineUp($lineup);

            #var_dump($lineup1);

            return $lineup1;
            
        }

    }

?>