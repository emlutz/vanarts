<?php
include("../classes/Db.php");
$contentImage = $_POST["old_img"];
if($_FILES['image']['name']!="") {
  $contentImage = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "../../imgs/".$contentImage);
}
Db::connect()->cleanPost();
Db::connect()->data("UPDATE section
  SET heading=\"{$_POST["heading"]}\",
      image=\"{$contentImage}\",
      subHeading=\"{$_POST["subHeading"]}\",
      body=\"{$_POST["body"]}\"
  WHERE id=\"{$_POST["orderId"]}\"");

$verb="updated";
header("location: ../content.php?msg&verb=$verb");
?>