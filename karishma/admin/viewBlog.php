<?php
include("classes/Db.php");
include("actions/verifyuser.php");
$pageTitle = 'Blog';
$description = 'Edit Blog';
include("partials/header.php");
if(isset($_GET["orderId"])) {
  $order = Db::connect()->dataArray("SELECT * FROM blog WHERE id='".$_GET["orderId"]."'")[0];
  if(!$order) {
    echo "Sorry, blog does not exist.";
    die;
  }
 } else {
$_GET["orderId"] = (isset($_GET['orderId']))?$_GET['orderId']:"";
$order['title'] = (isset($order['title']))?$order['title']:"";
$order['image'] = (isset($order['image']))?$order['image']:"";
$order['subHeading'] = (isset($order['subHeading']))?$order['subHeading']:"";
$order['body'] = (isset($order['body']))?$order['body']:"";
}
?>
<section class="edit">
  <a href="blogs.php" class="btn"><i class="fas fa-arrow-alt-circle-left"></i> Back to Blogs</a>
  <form method="post" action="actions/saveBlog.php" class="edits" enctype="multipart/form-data">
    <input type="hidden" name="orderId" value="<?=$_GET["orderId"]?>">
    <div class="img">
      <label for="name">Blog Title</label>
      <input type="text" name="title" value="<?=$order['title']?>" placeholder="Enter Blog Title">
    </div>
    <div class="content">
      <label for="image">Photo</label>
      <img src="../imgs/<?=$order['image']?>" alt="<?=$order['subHeading']?>" class="preview">
      <input type="hidden" name="old_img" value="<?=$order["image"]?>">
      <input type="file" name="image">
      <label for="subHeading">Sub Heading</label>
      <textarea name="subHeading" placeholder="Section Sub Heading"><?=$order['subHeading']?></textarea>
      <label for="subHeading">Body</label>
      <textarea name="body" placeholder="Section Body Text" class="long"><?=$order['body']?></textarea>
      <input type="submit" name="submit" value="Save Blog">
    </div>
  </form>
</section>
<?php
include('partials/footer.php');
?>