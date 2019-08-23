<?php
include("functions/main.php");
session_start();
$result = mysqli_fetch_assoc(getRecords("SELECT * FROM users WHERE id=\"{$_SESSION["userID"]}\""));
if (!isset($result['id']))
{
  header("location: index.php?error=true");
}
?>