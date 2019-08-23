<?php
Class ReviewProduct {
  public function __construct($data) {
    $this->id = $data["id"];
    $this->name = $data["name"];
    $this->review = $data["review"];
    $this->recommend = $data["recommend"];
    $this->date = $data["date"];
    $this->approved = $data["approved"];
    $this->productId = $_GET["productId"];
  }
  static public function getReviews($productId) {
    $productId = filter_var($productId, FILTER_SANITIZE_NUMBER_INT);
    $reviews = array();
    $result = Db::connect()->data("SELECT * FROM review WHERE productId = '".$productId."' AND approved = 1");
    while($record = mysqli_fetch_assoc($result)) {
      $reviews[] = $record;
    }
    return $reviews;
  }
  static public function addReview($productId) {
    Db::connect()->cleanPost();
    $date = date("Ymd");
    $approved = 0;
    $con = Db::connect()->data("INSERT INTO review (name, review, recommend, date, approved, productId) VALUES ('".$_POST["name"]."', '".$_POST["review"]."', '".$_POST["recommend"]."', '".$date."', '".$approved."', '".$_POST["productId"]."')");
    header('Location: '.$_SERVER['HTTP_REFERER'].'&msg');
  }
}
?>