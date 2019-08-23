<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Edit Content';
$description = 'Edit Content';
include("partials/header.php");
if(isset($_GET["orderId"])) {
  $order = Db::connect()->dataArray("SELECT * FROM section WHERE id='".$_GET["orderId"]."'")[0];
  if(!$order) {
    echo "Sorry, section does not exist.";
    die;
  }
 } else {
$_GET["orderId"] = (isset($_GET['orderId']))?$_GET['orderId']:"";
$order['heading'] = (isset($order['heading']))?$order['heading']:"";
$order['image'] = (isset($order['image']))?$order['image']:"";
$order['subHeading'] = (isset($order['subHeading']))?$order['subHeading']:"";
$order['body'] = (isset($order['body']))?$order['body']:"";
}
?>
<section class="edit">
  <h1><?=$order["heading"]?> Details</h1>
  <a href="content.php" class="btn"><i class="fas fa-arrow-alt-circle-left"></i> Back to Sections</a>
  <form method="post" action="actions/saveContent.php" class="edits" enctype="multipart/form-data">
    <input type="hidden" name="orderId" value="<?=$_GET["orderId"]?>">
    <div class="img">
      <label for="heading">Heading</label>
      <input type="text" name="heading" value="<?=$order['heading']?>" placeholder="Enter Section Heading">
    </div>
    <div class="content">
      <label for="image">Photo</label>
      <img src="../imgs/<?=$order['image']?>" alt="Karishma Chera photo" class="preview">
      <input type="hidden" name="old_img" value="<?=$order["image"]?>">
      <input type="file" name="image">
      <label for="subHeading">Sub Heading</label>
      <textarea name="subHeading" placeholder="Section Sub Heading"><?=$order['subHeading']?></textarea>
      <label for="body">Body</label>
      <textarea name="body" placeholder="Section Body Text" class="long"><?=$order['body']?></textarea>
      <input type="submit" name="submit" value="Update Section">
    </div>
  </form>
</section>
<?php
include("partials/footer.php");
?>