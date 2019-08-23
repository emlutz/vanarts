<?php
include("../classes/Db.php");
$description = "";
$link = "";
$image = $_POST["old_img"];
if($_FILES['image']['name']!="") {
  $image = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "../../imgs/".$image);
}
if($_POST["orderId"]!="") {
  Db::connect()->cleanPost();
  Db::connect()->data("UPDATE blog
    SET title=\"{$_POST["title"]}\",
        image=\"{$image}\",
        subHeading=\"{$_POST["subHeading"]}\",
        body=\"{$_POST["body"]}\"
        description=\"$description\"
        link=\"$link\"
    WHERE id=\"{$_POST["orderId"]}\""); 
  $verb="updated";
} else {
  Db::connect()->cleanPost();
  Db::connect()->data("INSERT INTO blog (title, image, subHeading, body, description, link)
    VALUES (\"{$_POST["title"]}\", \"{$image}\", \"{$_POST["subHeading"]}\", \"{$_POST["body"]}\", \"$description\", \"$link\")");
  $verb="added";
}
header("location: ../blogs.php?msg&verb=$verb");
?>