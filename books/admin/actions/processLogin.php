<?php
include("../functions/main.php");
session_start();
$result = mysqli_fetch_assoc(getRecords("SELECT * FROM users WHERE strEmail=\"{$_POST["strEmail"]}\" AND strPassword=\"{$_POST["strPassword"]}\""));

if(isset($result['id']))
{
  $_SESSION["userID"] = $result['id'];
  header("location: ../dashboard.php");
} else {
  header("location: ../index.php?error=true&msg");
}
?>