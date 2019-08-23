<?php
include("../classes/Db.php");
Db::connect()->data("DELETE FROM podcast WHERE id=\"{$_GET["orderId"]}\"");
header("location: ../podcasts.php?msg&verb=deleted");
?>