<?php
$pageTitle = 'Messages';
include("partials/header.php");
include("functions/functions.php");
?>

<div class="container">
  <h4>Messages</h4>
  <?php
  $arrFields = array("strName", "strEmail", "strMessage");
  showTableHeader($arrFields);

  $sql = "SELECT * FROM contact";
  showData($sql, $arrFields);
  ?>
</div>