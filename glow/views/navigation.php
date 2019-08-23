<header>
  <nav>
    <a href="index.php?controller=pages&action=main"><h1 class="hide">Health Glow</h1><img src="content/imgs/logo_light.png" alt="Health Glow Logo"></a>
    <a href="javascript:;" id="menuIcon" onclick="openMenu()"><span>Menu</span></a>
    <div id="sm_menu">
      <a href="javascript:void(0)"class="closebtn" onclick="closeMenu()">&times; Close</a>
      <?php
      foreach($this->cat as $cat) {?>
        <a href="index.php?controller=pages&action=productCat&cat=<?=$cat["id"]?>"><?=$cat["name"]?></a>
      <?php
      }
      ?>
    </div>
    <?php
    foreach($this->cat as $cat) {?>
      <a href="index.php?controller=pages&action=productCat&cat=<?=$cat["id"]?>" class="big_menu"><?=$cat["name"]?></a>
    <?php
    }
    ?>
    <a href="javascript:;" id="openCart" onclick="openNav()">Cart <span><?=count($_SESSION["cart"]);?></span></a>
  </nav>
</header>
<div id="cart">
  <a href="javascript:void(0)" id="closeCart" class="closebtn" onclick="closeNav()">&times; Close</a>
  <h1>Your Cart</h1>
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
  <a href="index.php?controller=cart&action=checKout" class="blackBtn">Checkout</a>
</div>