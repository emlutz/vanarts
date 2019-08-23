<?php
include("functions/functions.php");

$sql = "INSERT INTO contact (strName, strEmail, strMessage)
  VALUES('".$_POST['strName']."','".$_POST['strEmail']."','".$_POST['strMessage']."')";
  saveData($sql);
header("location: contact.php");
?>