<?php
include("../classes/Db.php");
session_start();
Db::connect()->cleanPost();
$result = Db::connect()->data("SELECT * FROM user WHERE name=\"{$_POST['name']}\"");
$num = mysqli_num_rows($result);
if($num > 0) {
  while($row=mysqli_fetch_assoc($result)) {
    $hashed = $row['password'];
    $hashMatch = password_verify($_POST['password'], $hashed);
    if(!$hashMatch) {
      header('location: ../index.php?invalid&what');
    } else {
      $user = mysqli_fetch_assoc(Db::connect()->data("SELECT * FROM user WHERE name=\"{$_POST['name']}\" AND password=\"{$row[password]}\""));
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