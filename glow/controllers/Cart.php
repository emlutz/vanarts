<?php
Class Cart extends Controller {
  public function addToCart() {
    ShoppingCart::addProduct($_GET["productId"]);
    header('Location: '.$_SERVER['HTTP_REFERER'].'&add&verb=Added+to');
  }

  public function remove() {
    ShoppingCart::removeProduct($_GET["productId"]);
    header('Location: '.$_SERVER['HTTP_REFERER'].'&add&verb=Removed+from');
  }

  public function show() {
    $this->description = "This is a student exercise website for the Vancouver Institute of Media Arts";
    $this->pageTitle = "Health Glow";
    $this->articleTitle = "";

    $this->cat = Categories::getAll();
    $this->nav = $this->renderView("navigation");

    $this->mainBody = $this->renderView("cartlayout");

    include("views/template.php");
  }

  public function checkout() {
    $this->description = "This is a student exercise website for the Vancouver Institute of Media Arts";
    $this->pageTitle = "Health Glow";
    $this->articleTitle = "";

    $this->cat = Categories::getAll();
    $this->nav = $this->renderView("navigation");

    $this->mainBody = $this->renderView("payform");

    include("views/template.php");
  }

  public function completeorder() {
    $this->description = "This is a student exercise website for the Vancouver Institute of Media Arts";
    $this->pageTitle = "Thank You VANARTS STUDENT MOCK PROJECT SITE";
    $this->articleTitle = "";

    $this->invoiceId = ShoppingCart::checkout();

    $this->cat = Categories::getAll();
    $this->nav = $this->renderView("navigation");

    $this->mainBody = $this->renderView("thanks");
    include("views/template.php");
  }

  public function showInvoice() {
    $this->description = "This is a student exercise website for the Vancouver Institute of Media Arts";
    $this->pageTitle = "Invoice VANARTS STUDENT MOCK PROJECT SITE";
    $this->articleTitle = "";
    
    $this->invoiceDetails = ShoppingCart::getOrder();
    $this->invoiceProducts = ShoppingCart::getOrderProducts($this->invoiceDetails);

    $this->cat = Categories::getAll();
    $this->nav = $this->renderView("navigation");

    $this->mainBody = $this->renderView("showinvoice");
    include("views/template.php");
  }

  public function main() {}
}
?>