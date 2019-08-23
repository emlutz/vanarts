<section class="pay">
  <div class="cart productView">
    <div>
      <h1>Your Payment Details</h1>
      <h2>Total Owed: $<?=ShoppingCart::getInvoiceTotal()?></h2>

      <form method="post" action="index.php" class="reviewForm">
        <input type="hidden" name="controller" value="cart">
        <input type="hidden" name="action" value="completeorder">

        <label for="name">Full Name</label>
        <input type="text" name="name">

        <label for="email">Email Address</label>
        <input type="email" name="email">

        <button type="submit">Pay</button>
      </form>
    </div>
    <div class="payCart">
      <h4>Your Cart</h4>
      <ul>
      <?php
      foreach($_SESSION["cart"] as $product) {
      ?>
        <li>
          <h4><a href="index.php?controller=pages&action=showproductfull&productId=<?=$product["id"]?>"><?=$product["name"]?></a></h4>
          <p><?=$product["price"]?></p>
          <div class="qty">
            <a href="index.php?controller=cart&action=remove&productId=<?=$product["id"]?>"><i class="fas fa-minus"></i></a>
            <p><?=$product["currentQty"]?></p>
            <a href="index.php?controller=cart&action=addToCart&productId=<?=$product["id"]?>"><i class="fas fa-plus"></i></a>
          </div>
        </li>
      <?php
      }
      ?>
      </ul>
      <p>Total: $<?=ShoppingCart::getInvoiceTotal()?></p>
    </div>
  </div>
</section>