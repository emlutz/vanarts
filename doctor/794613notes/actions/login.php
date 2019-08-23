<?php
include("../classes/main.php");
session_start();
Database::connect()->cleanPost();
$result = Database::connect()->data("SELECT * FROM user WHERE strEmail=\"{$_POST['email']}\"");
$num = mysqli_num_rows($result);
if($num > 0) {
  while($row=mysqli_fetch_assoc($result)) {
    $hashed = $row['strPassword'];
    $hashMatch = password_verify($_POST['password'], $hashed);
    if(!$hashMatch) {
      header('location: ../index.php?invalid&what');
    } else {
      $user = mysqli_fetch_assoc(Database::connect()->data("SELECT * FROM user WHERE strEmail=\"{$_POST['email']}\" AND strPassword=\"{$row[strPassword]}\""));
      // var_dump($user);
      // die;
      if(!isset($user['id'])) {
        print_r($user['0']);
      } else {
        $_SESSION['user'] = $user['id'];
        header('location: ../dash.php');
      }
    }
  }
} else {
  header('location: ../index.php?invalid&why');
}
?>