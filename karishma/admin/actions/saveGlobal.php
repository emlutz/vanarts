<?php
include("../classes/Db.php");
Db::connect()->cleanPost();
Db::connect()->data("UPDATE global
  SET value=\"{$_POST["value"]}\"
  WHERE id=\"{$_POST["id"]}\"");
$verb="updated";
header("location: ../profile.php?msg&verb=$verb");
?>