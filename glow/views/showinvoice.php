<section class="cart">
  <h1>My Order Invoice</h1>
  <p>Your Name: <?=$this->invoiceDetails[0]["name"]?></p>
  <p>Your Email: <?=$this->invoiceDetails[0]["email"]?></p>
  <h3>Products Ordered</h3>
  <div class="invoice">
    <?php
    $total = 0;
    foreach($this->invoiceProducts as $product) {
    ?>
      <ul>
        <li><?=$product["name"]?>, <?=$product["price"]?>, <?=$product["qty"]?></li>
      </ul>
    <?php
    $total = $total + ($product["price"]*$product["qty"]);
    }
    ?>
      <p>Total: <?php echo number_format($total,2)?></p>
  </div>
</section>