<?php
class DB {

  private static $con;

  public static function getCon(){

    if(!self::$con) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "premier_league";

    self::$con = new mysqli($servername, $username, $password, $dbname);
  }
  return self::$con;
  }
}
?>
