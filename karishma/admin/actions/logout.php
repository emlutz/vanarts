<?php
include("../classes/Db.php");
include("verifyuser.php");
session_destroy();
header("location: ../index.php?site");
?>