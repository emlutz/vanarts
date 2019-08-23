<?php
Class ShoppingCart {
  static public function addProduct($productId) {
    if(isset($_SESSION["cart"][$productId])) {
      $_SESSION["cart"][$productId]["currentQty"]++;
    } else {
      $_SESSION["cart"][$productId] = (Array)Product::get($productId);
      $_SESSION["cart"][$productId]["currentQty"] = 1;
    }
  }

  static public function updateQty($productId, $newQty) {
    $_SESSION["cart"][$productId]["currentQty"] = $newQty;
  }

  static public function removeProduct($productId) {
    if(isset($_SESSION["cart"][$productId])) {
      $_SESSION["cart"][$productId]["currentQty"]--;
    } if ($_SESSION["cart"][$productId]["currentQty"] == 0) {
    unset($_SESSION["cart"][$productId]);
    }
  }

  static public function getInvoiceTotal() {
    $totalInvoicePrice = 0;
    foreach($_SESSION["cart"] as $product) {
      $totalInvoicePrice = $totalInvoicePrice + ($product["price"] * $product["currentQty"]);
    }
    return $totalInvoicePrice;
  }

  static public function checkout() {
    Db::connect()->cleanPost();
    $invoiceNumber = date("Ymd").mt_rand(1000, 100000);
    $dateTime = date("Y-m-d h:m:s");
    $fullfilled = 0;
    $con = Db::connect();
    $con->data("INSERT INTO invoice (invoiceNumber, dateOrdered, name, price, email, fullfilled) VALUES ('".$invoiceNumber."', '".$dateTime."', '".$_POST['name']."', '".ShoppingCart::getInvoiceTotal()."', '".$_POST['email']."', '".$fullfilled."')");

    $invoiceId = mysqli_insert_id($con->con);

    foreach($_SESSION["cart"] as $product) {
      $con->data("INSERT INTO invoice_product (invoiceId, productId, qty, price) VALUES ('".$invoiceId."', '".$product["id"]."', '".$product["currentQty"]."', '".$product["price"]."')");
      $con->data("UPDATE product SET qty = qty - '".$product["currentQty"]."' WHERE id = '".$product["id"]."' AND field > 0");
    }

    $msg = "Thank you for shopping with Health Glow! Click the following link to view your order: www.emilysweb.com/glow?controller=cart&action=showInvoice&invoiceId=".$invoiceId;

    mail($_POST["email"], "Your Health Glow Order", $msg);

    $_SESSION['cart'] = array();
    return $invoiceId;
  }

  static public function getOrder() {
    $invoiceId = $_GET["invoiceId"];
    $invoice = Db::connect()->dataArray("SELECT * FROM invoice WHERE id = '".$invoiceId."'");
    return $invoice;
  }

  static public function getOrderProducts($invoiceId) {
    $invoiceId = $_GET["invoiceId"];
    $orderedProducts = Db::connect()->dataArray("SELECT invoice_product.*, product.name FROM invoice_product LEFT JOIN product ON product.id = invoice_product.productId WHERE invoiceId='".$invoiceId."'");
    return $orderedProducts;
  }
}
?>