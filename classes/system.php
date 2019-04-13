<?php


    class System {

        public static $tableName = "";
        public static $columns = [];

        public static function findBySql($sql) {

            $result = DB::getCon()->query($sql);
            $count = $result->num_rows;

            if($count === 1) {

                $object_array = "";
                while($record = $result->fetch_assoc()) {
                    $object_array = static::init($record);
                }

            } else {

                $object_array = [];
                while($record = $result->fetch_assoc()) {
                    $object_array[] = static::init($record);
                }
            }

            return $object_array;

        }

        public static function findById($id) {

            $sql = "SELECT * FROM " . static::$tableName . " WHERE id = '$id'";
            $result = static::findBySql($sql);

            return $result;
        }

        public static function findAll() {

            $sql = "SELECT * FROM " . static::$tableName . " ORDER BY teams ASC";
            $result = static::findBySql($sql);

            return $result;

        }

        public static function init($record) {

            $object = new static;
    
            foreach($record as $property => $value) {
                if(property_exists($object, $property)) {
                  $object->$property = $value;
                }
              }
              return $object;
        }

        protected function create() {
            
            $attributes = $this->sanitized_attributes();
            $sql = "INSERT INTO " . static::$tableName . " (";
            $sql .= join(', ', array_keys($attributes));
            $sql .= ") VALUES ('";
            $sql .= join("', '", array_values($attributes));
            $sql .= "')";
            $result = DB::getCon()->query($sql);
            if($result) {
              $this->id = DB::getCon()->insert_id;
            }
            return $sql;
          }
        
          protected function update() {

            $attributes = $this->sanitized_attributes();
            $attribute_pairs = [];
            foreach($attributes as $key => $value) {
              $attribute_pairs[] = "{$key}='{$value}'";
            }
        
            $sql = "UPDATE " . static::$tableName . " SET ";
            $sql .= join(', ', $attribute_pairs);
            $sql .= " WHERE id='" . DB::getCon()->escape_string($this->id) . "' ";
            $sql .= "LIMIT 1";
            $result = DB::getCon()->query($sql);
            return $result;
          }
        
          public function save() {
            
            if(!empty($this->id)) {
              $this->update();
              return($this->id);
            } else {
              $this->create();
            }

            
          }
        
          public function merge_attributes($args=[]) {
            foreach($args as $key => $value) {
              if(property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
              }
            }
          }
        
          public function attributes() {
            $attributes = [];
            foreach(static::$columns as $column) {
              if($column == 'id') { continue; }
              $attributes[$column] = $this->$column;
            }
            return $attributes;
          }
        
          protected function sanitized_attributes() {
            $sanitized = [];
            foreach($this->attributes() as $key => $value) {
              $sanitized[$key] = DB::getCon()->escape_string($value);
            }
            return $sanitized;
          }
        
          public function delete() {
            $sql = "DELETE FROM " . static::$table_name . " ";
            $sql .= "WHERE id='" . DB::getCon()($this->id) . "' ";
            $sql .= "LIMIT 1";
            $result = DB::getCon()->query($sql);
            return $result;
        
          }

          public static function getNews($url) {

            $result = file_get_contents($url);

            $json = json_decode($result);

            return $json;

          }

          
    }


?>