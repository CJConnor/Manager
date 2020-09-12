<?php

  class User {
  
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
    
    public function __construct($data=[]) {
      
      $db = new Database();

      if (empty($data)) :
          $db->query("SHOW columns FROM user");

          foreach($db->resultSet() as $col) : 
              @$this->{$col->Field} = "";
          endforeach;

      elseif (!isset($data['id'])) :
          $db->query("SHOW columns FROM user");

          foreach($db->resultSet() as $col) : 
              @$this->{$col->Field} = $data[$col->Field];
          endforeach;

      elseif (isset($data['id'])) :
          
          $db->query("SELECT * FROM user WHERE id = :id LIMIT 1");
          $db->bind(':id', $data['id']);
          $db->execute();

          $result = $db->single();

          $this->id        = $result->id;
          $this->username  = $result->username;
          $this->password  = $result->password;
          $this->forename  = $result->forename;
          $this->surname   = $result->surname;
          $this->dob       = $result->dob;
          $this->age       = $result->age;
          $this->favTeam   = $result->favTeam;
          $this->tableFile = $result->tableFile;
          $this->status    = $result->status;
          $this->admin     = $result->admin;

      endif;
      
    }
		
		public static function createUser($args=[]) {
        //Function to register user
        
        $fileName   = strtotime(date("Y-m-d")) . rand(1, 1000) . ".json";
        $masterFile = "../../_assets/javascript/master/premier_league.json";
        $userFile   = "../../_assets/javascript/tables/";

        System::copyFile($masterFile, $userFile, $fileName);

        $args['tableFile'] = $fileName;

        $user   = new User($args);
        $userid = $user->save();

        return $userid;
			
    }
    
    public static function checkIfUserExists($query) {

        $sql = "SELECT id FROM user WHERE $query";
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
