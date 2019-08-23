<?php
class Database {
  var $con;
  public function __construct($con) {
    $this->con=$con;
  }
  public static function connect(){
    $config = parse_ini_file("$_SERVER[DOCUMENT_ROOT]/../txt/config.ini");
    $con = mysqli_connect($config["host"], $config["user"], $config["pass"], $config["db"]);
    if(!$con) {
      die("Failed to connect to database:" . mysqli_connect_error());
    }
    $db = new Database($con);
    return $db;
  }
  public function data($sql){
    $result = mysqli_query($this->con, $sql);
    return $result;
  }
  public function cleanPost() {
    foreach($_POST as $postVar) {
      $_POST[$postVar] = mysqli_real_escape_string($this->con, $postVar);
    }
  }
}
?>