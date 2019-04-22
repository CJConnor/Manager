<?php

include("../../classes/dbconnect.php");
include("../../classes/system.php");
include("../../classes/user.php");

$username = $_POST['username'];
$password = $_POST['password'];

$username = DB::getCon()->escape_string($username);
$password = DB::getCon()->escape_string($password);

$query = "username = '$username' AND password = '$password'";

$check = User::checkIfUserExists($query);

if($check != 0) {

  setcookie("userid", $check, time() + 3200, "/");

  echo "success";

} else {

  echo "failed";
  
}

 ?>
