<?php

include_once"../classes/dbconnect.php";

$username = $_POST['username'];
$password = $_POST['password'];

$username = DB::getCon()->escape_string($username);
$password = DB::getCon()->escape_string($password);

$sql = "SELECT * FROM users WHERE username = '$username' && password = '$password'";
$result = DB::getCon()->query($sql);
$count = $result->num_rows;

if($count == 1) {

  $row = $result->fetch_assoc();
  $id = $row['id'];

  setcookie("userid", $id, time() + 3200, "/");

  echo "success";

}else {
  echo "failed";
}

 ?>
