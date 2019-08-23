<?php
include("../classes/Db.php");
$subHeading = "";
$image = "";
$body = "";
if($_POST["orderId"]!="") {
  Db::connect()->cleanPost();
  Db::connect()->data("UPDATE video
    SET title=\"{$_POST["title"]}\",
        description=\"{$_POST["description"]}\",
        link=\"{$_POST["link"]}\",
        featured=\"{$_POST["featured"]}\",
        image=\"{$image}\",
        sub=\"{$subHeading}\",
        body=\"{$body}\"
    WHERE id=\"{$_POST["orderId"]}\"");
  $verb="updated";
} else {
  Db::connect()->cleanPost();
  Db::connect()->data("INSERT INTO video (title, description, link, featured, image, subHeading, body)
    VALUES (\"{$_POST["title"]}\",
            \"{$_POST["description"]}\",
            \"{$_POST["link"]}\",
            \"{$_POST["featured"]}\",
            \"{$image}\",
            \"{$subHeading}\",
            \"{$body}\")");
  $verb="added";
}
header("location: ../videos.php?msg&verb=$verb");
?>