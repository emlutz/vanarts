<?php
include("functions/functions.php");

deleteData("contact", $_GET["id"]);
header("location: messages.php");
?>