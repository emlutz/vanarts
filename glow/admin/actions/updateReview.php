<?php
include("../classes/Db.php");
if ($_GET["orderStatus"]==0) {
  Db::connect()->data("UPDATE review SET approved = 1 WHERE id='".$_GET["orderId"]."'");
  header("location: ".$_SERVER['HTTP_REFERER'].'?add&verb=Published');
} else if ($_GET["orderStatus"]==1) {
  Db::connect()->data("UPDATE review SET approved = 0 WHERE id='".$_GET["orderId"]."'");
  header("location: ".$_SERVER['HTTP_REFERER'].'?add&verb=Unpublished');
}
?>