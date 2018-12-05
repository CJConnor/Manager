<?php

    class System {

        public static function findBySql($sql) {

            $result = DB::getCon()->query($sql);

            return $result;

        }

    }

?>