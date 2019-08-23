<p class="center">
<?php
$productId = $this->product->id;
$cartQty = isset($_SESSION["cart"][$productId]["currentQty"]) ?: $cartQty = '0';
$verb = isset($_GET['verb']) ? $_GET['verb'] : $verb = "";
if(isset($_GET['msg'])) {
  echo "&mdash; Thank you for taking the time to write a review. We appreciate the feedback! &mdash;";
}
if(isset($_GET['add'])) {
  echo "&mdash; $verb cart [<a href=\"javascript:;\" onclick=\"openNav()\">View Cart</a>] &mdash;";
}
?>
</p>
<article class="productView">
<?php
$sold = ($this->product->qty == 0) ? "Sold Out" : "";
$qty = ($this->product->qty == 0) ? "" : "<div class=\"qty\">
  <a href=\"index.php?controller=cart&action=remove&productId=".$this->product->id."\"><i class=\"fas fa-minus\"></i></a>
  <p>".$cartQty."</p>
  <a href=\"index.php?controller=cart&action=addToCart&productId=".$this->product->id."\"><i class=\"fas fa-plus\"></i></a>
</div>";
?>
  <div class="images">
    <img src="assets/<?=$this->product->coverImg?>" alt="<?=$this->product->description?>">
    <p class="sold"><?=$sold?></p>
  </div>
  <div class="info">
    <h1><?=$this->product->name?></h1>
    <p><?=$this->product->price?></p>
    <p><?=$qty?></p>
    <p><?=($this->product->description)?></p>
    </div>
</article>
<section class="reviews">
  <h3>What Our Customers Say About <?=$this->product->name?>:</h3>
  <div class="wrapper">
  <?php
    if ($this->review == null) {
    ?>
      <p>Sorry, this product has no reviews.</p>
    <?php
    } else {
    foreach($this->review as $review) {
      $recommend = ($review["recommend"]=='yes') ? "<i class=\"far fa-thumbs-up\"></i> I recommend this product." : "";
    ?>
    <div class="review">
      <p class="lg_txt"><?=$review["review"]?></p>
      <p class="indent"><?=$recommend?></p>
      <h6 class="name">&mdash; <?=$review["name"]?></h6>
      <p class="date">posted on <?=$review["date"]?></p>
    </div>
  <?php
    }
  }
  ?>
  </div>
  <div class="reviewForm">
    <h3>Leave A Review</h3>
    <form action="index.php" method="post">
      <input type="hidden" name="controller" value="pages">
      <input type="hidden" name="action" value="savereview">
      <input type="hidden" name="productId" value="<?=$this->product->id?>">

      <label for="name">Name</label>
      <input type="text" name="name">

      <label for="review">Review</label>
      <textarea name="review"></textarea>

      <label for="recommend">Would you recommend <?=$this->product->name?> to a friend?</label>
      <div class="radio">
        <input type="radio" name="recommend" value="yes">
        <label for="recommend">Yes</label>
      </div>
      <div class="radio">
        <input type="radio" name="recommend" value="no">
        <label for="recommend">No</label>
      </div>

      <button type="submit" name=
      "submit">Submit Review</button>
    </form>
  </div>
</section>