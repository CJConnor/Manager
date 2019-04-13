<?php

  class User extends System {
  
    public $id;
    public $username;
    public $password;
    public $email;
    public $forename;
    public $surname;
    public $dob;
    public $age;
    public $favTeam;
    public $status;
    public $admin;
    
    
   
    public static $tableName = "users";
    public static $columns   = ['id', 'username', 'password', 'email', 'forename', 'surname', 'dob', 'age', 'favTeam', 'status', 'admin'];
    
    public function __construct($args=[]) {
      
        $this->id       = isset($args['id']) ? $args['id'] : "";
        $this->username = isset($args['username']) ? $args['username'] : "";
        $this->password = isset($args['password']) ? $args['password'] : "";
        $this->email = isset($args['email']) ? $args['email'] : "";
        $this->forename = isset($args['forename']) ? $args['forename'] : "";
        $this->surname  = isset($args['surname']) ? $args['surname'] : "";
        $this->dob      = isset($args['dob']) ? $args['dob'] : "0000-00-00";
        $this->age      = isset($args['age']) ? $args['age'] : "";
        $this->favTeam  = isset($args['favTeam']) ? $args['favTeam'] : "";
        $this->status   = isset($args['status']) ? $args['status'] : "Y";
        $this->admin    = isset($args['admin']) ? $args['admin'] : 0;
        
      
    }
		
		public static function createUser($args=[]) {
        //Function to register user
        
        $user = new User($args);

        $save = $user->save();

        return $save;
			
    }
    
    public static function checkIfUserExists($query) {

        $sql = "SELECT id FROM users WHERE $query";
        $result = DB::getCon()->query($sql);
        $count = $result->num_rows;

        if($count > 0) {

          $return = 1;

        } else {

          $return = 0;

        }

        return $return;

    }
  
  }

?>
