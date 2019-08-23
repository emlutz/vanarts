<?php
Class Pages extends Controller {
  public function __construct() {}

  public function main() {
    $this->description = "Health Glow Natural Organic Bath Beauty Vancouver British Columbia BC Canada This is a student exercise website for the Vancouver Institute of Media Arts";
    $this->pageTitle = "Health Glow VANARTS STUDENT MOCK PROJECT SITE";
    $this->articleTitle = "New This Season";

    $this->cat = Categories::getAll();
    $this->nav = $this->renderView("navigation");
    $this->mainBody .= $this->renderView("hero");

    $this->featured = Products::getFeature();
    $this->mainBody .= $this->renderView("productgrid");
    
    $this->header = $this->renderView("footer");

    include("views/template.php");
  }

  public function showproductfull() {
    $this->cat = Categories::getAll();
    $this->nav = $this->renderView("navigation");

    $this->product = Product::get($_GET["productId"]);
    $this->review = ReviewProduct::getReviews($_GET["productId"]);
    $this->mainBody .= $this->renderView("productviewfull");

    $this->description = "This is a student exercise website for the Vancouver Institute of Media Arts";
    $this->pageTitle = "'".$this->product->name."' VANARTS STUDENT MOCK PROJECT SITE";
    $this->articleTitle = "";

    include("views/template.php");
  }

  public function productCat() {
    $this->cats = Category::get($_GET["cat"]);
    $this->cat = Categories::getAll();
    $this->nav = $this->renderView("navigation");

    $this->products = Products::getCategory($_GET["cat"]);
    $this->mainBody .= $this->renderView("productgridall");

    $this->description = "This is a student exercise website for the Vancouver Institute of Media Arts";
    $this->pageTitle = "'".$this->cats->name."' VANARTS STUDENT MOCK PROJECT SITE";
    $this->articleTitle = "";

    include("views/template.php");
  }

  public function savereview() {
    $this->product = Product::get($_POST["productId"]);
    ReviewProduct::addReview($_POST["productId"]);
  }
}
?>