<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Podcast';
$description = 'Edit Podcast';
include("partials/header.php");
if(isset($_GET["orderId"])) {
  $order = Db::connect()->dataArray("SELECT * FROM podcast WHERE id='".$_GET["orderId"]."'")[0];
  if(!$order) {
    echo "Sorry, podcast does not exist.";
    die;
  }
} else {
$_GET["orderId"] = (isset($_GET['orderId']))?$_GET['orderId']:"";
$order['title'] = (isset($order['title']))?$order['title']:"";
$order['description'] = (isset($order['description']))?$order['description']:"";
$order['image'] = (isset($order['image']))?$order['image']:"";
$order['link'] = (isset($order['link']))?$order['link']:"";
$order['featured'] = (isset($order['featured']))?$order['featured']:"";
}
?>
<section class="edit">
  <a href="podcasts.php" class="btn"><i class="fas fa-arrow-alt-circle-left"></i> Back to Podcasts</a>
  <form method="post" action="actions/savePodcast.php" class="edits" enctype="multipart/form-data">
    <input type="hidden" name="orderId" value="<?=$_GET["orderId"]?>">
    <div class="img">
      <label for="name">Podcast Title</label>
      <input type="text" name="title" value="<?=$order['title']?>" placeholder="Enter Podcast Title">
    </div>
    <div class="content">
      <label for="image">Photo</label>
      <img src="../imgs/<?=$order['image']?>" alt="" class="preview">
      <input type="hidden" name="old_img" value="<?=$order["image"]?>">
      <input type="file" name="image">
      <label for="description">Description</label>
      <textarea name="description" placeholder="Description"><?=$order['description']?></textarea>
      <label for="link">Link</label>
      <input name="link" value="<?=$order['link']?>" placeholder="Media Link">
      <label for="featured">Featured</label>
      <div class="radio">
        <input type="radio" name="featured" value="1">
        <label for="featured">Yes</label>
      </div>
      <div class="radio">
        <input type="radio" name="featured" value="0">
        <label for="featured">No</label>
      </div>
      <input type="submit" name="submit" value="Save Podcast">
    </div>
  </form>
</section>
<?php
include('partials/footer.php');
?>