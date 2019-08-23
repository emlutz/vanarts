<?php
include("../classes/Db.php");
$productImage = $_POST["old_img"];
if($_FILES['coverImg']['name']!="") {
  $productImage = $_FILES['coverImg']['name'];
  move_uploaded_file($_FILES['coverImg']['tmp_name'], "../../assets/".$productImage);
}
if($_POST["orderId"]!="") {
  Db::connect()->cleanPost();
  Db::connect()->data("UPDATE product
    SET name=\"{$_POST["name"]}\",
        coverImg=\"{$productImage}\",
        price=\"{$_POST["price"]}\",
        qty=\"{$_POST["qty"]}\",
        sku=\"{$_POST["sku"]}\",
        description=\"{$_POST["description"]}\",
        featured=\"{$_POST["featured"]}\"
    WHERE id=\"{$_POST["orderId"]}\"");
  
  Db::connect()->cleanPost();  
  Db::connect()->data("UPDATE product_category
    SET categoryId=\"{$_POST["categoryId"]}\",
        productId=\"{$_POST["orderId"]}\"
    WHERE productId=\"{$_POST["orderId"]}\"");
  
  $verb="updated";
} else {
  Db::connect()->cleanPost();
  $newID = Db::connect()->insertData("INSERT INTO product
      (name, coverImg, price, qty, sku, description, featured)
    VALUES (\"{$_POST["name"]}\",
      \"{$productImage}\",
      \"{$_POST["price"]}\",
      \"{$_POST["qty"]}\",
      \"{$_POST["sku"]}\",
      \"{$_POST["description"]}\",
      \"{$_POST["featured"]}\")");
  
  Db::connect()->cleanPost();
  Db::connect()->data("INSERT INTO product_category (categoryId, productId)
  VALUES (\"{$_POST["categoryId"]}\",
  \"{$newID}\")");
  
  $verb="added";
}
header("location: ../products.php?msg&verb=$verb");
?>