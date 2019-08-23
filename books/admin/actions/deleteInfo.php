<?php
include("../functions/main.php");

doSQL("DELETE FROM globals WHERE id=\"{$_GET['globalID']}\"");

header("location: ../info.php?success=true&verb=deleted")
?>