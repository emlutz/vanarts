<?php
include("../classes/Db.php");
$categoryImage = $_POST["old_img"];
if($_FILES['image']['name']!="") {
  $categoryImage = $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'], "../../assets/".$categoryImage);
}
if($_POST["orderId"]!="") {
  Db::connect()->cleanPost();
  Db::connect()->data("UPDATE category
    SET name=\"{$_POST["name"]}\",
        image=\"{$categoryImage}\",
        description=\"{$_POST["description"]}\"
    WHERE id=\"{$_POST["orderId"]}\"");
  
  $verb="updated";
} else {
  Db::connect()->cleanPost();
  Db::connect()->data("INSERT INTO category (name, image, description)
    VALUES (\"{$_POST["name"]}\",
            \"{$categoryImage}\",
            \"{$_POST["description"]}\")");
  
  $verb="added";
}
header("location: ../categories.php?msg&verb=$verb");
?>