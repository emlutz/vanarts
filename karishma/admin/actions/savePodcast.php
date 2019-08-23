<?php
include("../classes/Db.php");
$image = $_POST["old_img"];
if($_FILES['image']['name']!="") {
  $image = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "../../imgs/".$image);
}
if($_POST["orderId"]!="") {
  Db::connect()->cleanPost();
  Db::connect()->data("UPDATE podcast
    SET title=\"{$_POST["title"]}\",
        description=\"{$_POST["description"]}\",
        image=\"{$image}\",
        link=\"{$_POST["link"]}\",
        featured=\"{$_POST["featured"]}\"
    WHERE id=\"{$_POST["orderId"]}\"");
  $verb="updated";
} else {
  Db::connect()->cleanPost();
  Db::connect()->data("INSERT INTO podcast (title, description, image, link, featured)
    VALUES (\"{$_POST["title"]}\",
    \"{$_POST["description"]}\",
    \"{$image}\",
    \"{$_POST["link"]}\",
    \"{$_POST["featured"]}\")");
  $verb="added";
}
header("location: ../podcasts.php?msg&verb=$verb");
?>