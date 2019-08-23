<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Category VANARTS STUDENT MOCK PROJECT SITE';
$description = 'This is a student exercise website for the Vancouver Institute of Media Arts';
include("partials/header.php");
if(isset($_GET["orderId"])) {
  $order = Db::connect()->dataArray("SELECT * FROM category WHERE category.id='".$_GET["orderId"]."'")[0];
  if(!$order) {
    echo "Sorry, order does not exist.";
    die;
  }
 } else {
$_GET["orderId"] = (isset($_GET['orderId']))?$_GET['orderId']:"";
$order['name'] = (isset($order['name']))?$order['name']:"";
$order['image'] = (isset($order['image']))?$order['image']:"";
$order['description'] = (isset($order['description']))?$order['description']:"";
}
?>
<section class="edit">
  <h1><?=$order["name"]?> Category Details</h1>
  <a href="categories.php" class=""><i class="fas fa-arrow-alt-circle-left"></i> Back to Categories</a>
  <form method="post" action="actions/saveCategory.php" class="edits" enctype="multipart/form-data">
    <input type="hidden" name="orderId" value="<?=$_GET["orderId"]?>">
    <div class="img">
      <label for="name">Category Name</label>
      <input type="text" name="name" value="<?=$order['name']?>" placeholder="Enter Category Name">
    </div>
    <div class="content">
      <label for="image">Photo</label>
      <img src="../assets/<?=$order['image']?>" alt="Health glow product photo" class="preview">
      <input type="hidden" name="old_img" value="<?=$order["image"]?>">
      <input type="file" name="image">
      <label for="description">Description</label>
      <textarea name="description" placeholder="Category Description"><?=$order['description']?></textarea>
      <input type="submit" name="submit" value="Update Category">
    </div>
  </form>
</section>