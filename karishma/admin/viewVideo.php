<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Video';
$description = 'Edit Video';
include("partials/header.php");
if(isset($_GET["orderId"])) {
  $order = Db::connect()->dataArray("SELECT * FROM video WHERE id='".$_GET["orderId"]."'")[0];
  if(!$order) {
    echo "Sorry, video does not exist.";
    die;
  }
} else {
$_GET["orderId"] = (isset($_GET['orderId']))?$_GET['orderId']:"";
$order['title'] = (isset($order['title']))?$order['title']:"";
$order['description'] = (isset($order['description']))?$order['description']:"";
$order['link'] = (isset($order['link']))?$order['link']:"";
$order['featured'] = (isset($order['featured']))?$order['featured']:"";
}
?>
<section class="edit">
  <a href="videos.php" class="btn"><i class="fas fa-arrow-alt-circle-left"></i> Back to Podcasts</a>
  <form method="post" action="actions/saveVideo.php" class="edits" enctype="multipart/form-data">
    <input type="hidden" name="orderId" value="<?=$_GET["orderId"]?>">
    <div class="img">
      <label for="name">Video Title</label>
      <input type="text" name="title" value="<?=$order['title']?>" placeholder="Enter Video Title">
    </div>
    <div class="content">
      <label for="description">Description</label>
      <textarea name="description" placeholder="Description"><?=$order['description']?></textarea>
      <label for="link">link</label>
      <input name="link" value="<?=$order['link']?>" placeholder="Section Sub Heading">
      <label for="featured">Featured</label>
      <div class="radio">
        <input type="radio" name="featured" value="1">
        <label for="featured">Yes</label>
      </div>
      <div class="radio">
        <input type="radio" name="featured" value="0">
        <label for="featured">No</label>
      </div>
      <input type="submit" name="submit" value="Save Video">
    </div>
  </form>
</section>