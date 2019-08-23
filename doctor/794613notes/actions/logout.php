<?php
include("../classes/main.php");
include("verifyuser.php");
session_destroy();
header("location: ../index.php?site");
?>