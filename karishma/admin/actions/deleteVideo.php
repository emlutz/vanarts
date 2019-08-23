<?php
include("../classes/Db.php");
Db::connect()->data("DELETE FROM video WHERE id=\"{$_GET["orderId"]}\"");
header("location: ../videos.php?msg&verb=deleted");
?>