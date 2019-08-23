<section class="grid">
  <h4 class="center"><?=$this->articleTitle?></h4>
  <div class="products">
    <?php
    foreach($this->featured as $product) {
      $sold = ($product->qty == 0) ? "Sold Out" : "";
    ?>
      <div class="product">
        <img src="assets/<?=$product->coverImg?>" alt="<?=$product->name?>">
        <p class="sold"><?=$sold?></p>
        <a href="javascript:;" class="hide view" data-id="<?=$product->id?>">Quick View</a>
        <h2><a href="index.php?controller=pages&action=showproductfull&productId=<?=$product->id?>"><?=$product->name?></a></h2>
        <p><?=$product->price?></p>
      </div>
      <div class="hide quick" data-id="<?=$product->id?>">
        <div class="modalWrapper">
          <a href="javascript:;" class="closeQuick">X Close</a>
          <article class="productView">
            <div class="images">
              <img src="assets/<?=$product->coverImg?>" alt="<?=$product->description?>">
            </div>
            <div class="info">
              <h1><a href="index.php?controller=pages&action=showproductfull&productId=<?=$product->id?>"><?=$product->name?></a></h1>
              <p><?=$product->price?></p>
              <a href="index.php?controller=cart&action=addToCart&productId=<?=$product->id?>" class="btn">Add To Cart</a>
              <p><?=($product->description)?></p>
              <a href="index.php?controller=pages&action=showproductfull&productId=<?=$product->id?>" class="btn">See Product Details &amp; Reviews</a>
            </div>
          </article>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>