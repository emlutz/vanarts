<?php
include("../classes/Db.php");
Db::connect()->data("DELETE FROM blog WHERE id=\"{$_GET["orderId"]}\"");
header("location: ../blogs.php?msg&verb=deleted");
?>