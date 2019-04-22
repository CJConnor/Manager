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
    public $tableFile;
    public $status;
    public $admin;
    
    
   
    public static $tableName = "users";
    public static $columns   = ['id', 'username', 'password', 'email', 'forename', 'surname', 'dob', 'age', 'favTeam', 'tableFile', 'status', 'admin'];
    
    public function __construct($args=[]) {
      
        $this->id        = isset($args['id']) ? $args['id'] : "";
        $this->username  = isset($args['username']) ? $args['username'] : "";
        $this->password  = isset($args['password']) ? $args['password'] : "";
        $this->email     = isset($args['email']) ? $args['email'] : "";
        $this->forename  = isset($args['forename']) ? $args['forename'] : "";
        $this->surname   = isset($args['surname']) ? $args['surname'] : "";
        $this->dob       = isset($args['dob']) ? $args['dob'] : "0000-00-00";
        $this->age       = isset($args['age']) ? $args['age'] : "";
        $this->favTeam   = isset($args['favTeam']) ? $args['favTeam'] : "";
        $this->tableFile = isset($args['tableFile']) ? $args['tableFile'] : "";
        $this->status    = isset($args['status']) ? $args['status'] : "Y";
        $this->admin     = isset($args['admin']) ? $args['admin'] : 0;
        
      
    }
		
		public static function createUser($args=[]) {
        //Function to register user
        
        $fileName   = strtotime(date("Y-m-d")) . rand(1, 1000) . ".json";
        $masterFile = "../../_assets/javascript/master/premier_league.json";
        $userFile   = "../../_assets/javascript/tables/";

        User::copyFile($masterFile, $userFile, $fileName);

        $args['tableFile'] = $fileName;

        $user   = new User($args);
        $userid = $user->save();

        return $userid;
			
    }
    
    public static function checkIfUserExists($query) {

        $sql = "SELECT id FROM users WHERE $query";
        $result = DB::getCon()->query($sql);
        $count = $result->num_rows;

        if($count > 0) {

          $row = $result->fetch_assoc();

          $return = $row['id'];

        } else {

          $return = 0;

        }

        return $return;

    }
  
  }

?>
