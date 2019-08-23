<?php
session_start();
$user = mysqli_fetch_assoc(Database::connect()->data("SELECT * FROM user WHERE id=\"{$_SESSION["user"]}\""));
  if (!isset($user['id'])) {
    header('location: index.php?invalid&how');
  }
?>