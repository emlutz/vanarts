<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Product VANARTS STUDENT MOCK PROJECT SITE';
$description = 'This is a student exercise website for the Vancouver Institute of Media Arts';
include("partials/header.php");
$category = Db::connect()->data("SELECT * FROM category");
if(isset($_GET["orderId"])) {
  $order = Db::connect()->dataArray("SELECT * FROM product WHERE product.id='".$_GET["orderId"]."'")[0];
  $orderCategory = Db::connect()->dataArray("SELECT * FROM product_category WHERE productId='".$_GET["orderId"]."'");
  if(!$order) {
    echo "Sorry, order does not exist.";
  }
} else {
$_GET["orderId"] = (isset($_GET['orderId']))?$_GET['orderId']:"";
$order['name'] = (isset($order['name']))?$order['name']:"";
$order['coverImg'] = (isset($order['coverImg']))?$order['coverImg']:"";
$order['price'] = (isset($order['price']))?$order['price']:"";
$order['qty'] = (isset($order['qty']))?$order['qty']:"";
$order['sku'] = (isset($order['sku']))?$order['sku']:"";
$order['description'] = (isset($order['description']))?$order['description']:"";
$order['featured'] = (isset($order['featured']))?$order['featured']:"";
$orderCategory['id'] = (isset($orderCategory['id']))?$orderCategory['id']:"";
$orderCategory['name'] = (isset($orderCategory['name']))?$orderCategory['name']:"";
}
?>
<section class="edit">
  <h1><?=$order["name"]?> Details</h1>
  <a href="products.php" class=""><i class="fas fa-arrow-alt-circle-left"></i> Back to Products</a>
  <form method="post" action="actions/saveProduct.php" enctype="multipart/form-data">
    <input type="hidden" name="orderId" value="<?=$_GET["orderId"]?>">
    <div class="edits">
      <div class="img">
        <label for="name">Product Name</label>
        <input type="text" name="name" value="<?=$order['name']?>" placeholder="Enter Product Name">

        <label for="coverImg">Photo</label>
        <img src="../assets/<?=$order["coverImg"]?>" alt="Health glow product photo" class="preview">
        <input type="hidden" name="old_img" value="<?=$order["coverImg"]?>">
        <input type="file" name="coverImg">
      </div>
      <div class="content">
        <label for="price">Price</label>
        <input type="text" name="price" value="<?=$order['price']?>" placeholder="Enter Product Price">
        
        <label for="qty">Quantity</label>
        <input type="text" name="qty" value="<?=$order['qty']?>" placeholder="Enter Product Quantity">
        
        <label for="sku">SKU</label>
        <input type="text" name="sku" value="<?=$order['sku']?>" placeholder="Enter Product SKU">
      </div>
    </div>
          
    <label for="description">Description</label>
    <textarea type="text" name="description" value="<?=$order['description']?>" placeholder="Enter Product Description"><?=$order['description']?></textarea>

    <label for="featured">Featured Status</label>
    <input type="text" name="featured" value="<?=$order['featured']?>" placeholder="Enter Product Featured Status">

    <label for="category">Category</label>
    <select name="categoryId" value="<?=$orderCategory?>">
    <?php
    while($record=mysqli_fetch_assoc($category)) {
      $select = ($record["id"]==$orderCategory) ? "SELECTED" : "" ?>
      <option value="<?=$record["id"]?>" <?=$select?>><?=$record["name"]?></option>
      <?php
    }
    ?>
    </select>

    <input type="submit" name="submit">
  </form>
</section>