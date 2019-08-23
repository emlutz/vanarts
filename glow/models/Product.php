<?php
Class Product {
  public function __construct($data) {
    $this->id = $data["id"];
    $this->name = $data["name"];
    $this->price = $data["price"];
    $this->description = $data["description"];
    $this->coverImg = $data["coverImg"];
    $this->qty = $data["qty"];
  }
  
  public static function getImgs($productId) {
    $result = Db::connect()->data("SELECT * FROM productimg WHERE productId = '".$productId."'");
  
    $imgs = array();
    while($record = mysqli_fetch_assoc($result)) {
      $imgs[] = $record;
    }
    return $imgs;
  }
  
  static public function get($productId) {
    $result = Db::connect()->data("SELECT * FROM product WHERE id = '".$productId."'");
    $row = mysqli_fetch_assoc($result);
    return new Product($row);
  }
}
?>