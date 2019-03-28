<?php

  class User extends Sytem {
  
    public $id;
    public $username;
    public $password;
    public $forename;
    public $surname;
    public $dob;
    public $age
    public $fav_team;
    public $admin;
   
    public static $tableName = "users";
    public static $columns   = ['id', 'username', 'password', 'forename', 'surname', 'dob', 'age', 'fav_team', 'admin'];
    
    public function __construct($args=[]) {
      
        $this->id       = isset($args['id']) ? $args['id'] : "";
        $this->username = isset($args['username']) ? $args['username'] : "";
        $this->password = isset($args['password']) ? $args['password'] : "";
        $this->forename = isset($args['forename']) ? $args['forename'] : "";
        $this->surname  = isset($args['surname']) ? $args['surname'] : "";
        $this->dob      = isset($args['dob']) ? $args['dob'] : "";
        $this->age      = isset($args['age']) ? $args['age'] : "";
        $this->fav_team = isset($args['fav_team']) ? $args['fav_team'] : "";
        $this->admin    = isset($args['admin']) ? $args['admin'] : "";
    
      
    }
		
		public function createUser() {
				//Function to register user	
			
		}
  
  }

?>
