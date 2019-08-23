<?php
Class Category {
  public function __construct($data) {
    $this->id = $data["id"];
    $this->name = $data["name"];
    $this->image = $data["image"];
    $this->description = $data["description"];
  }

  public static function get($catId) {
    $result = Db::connect()->data("SELECT * FROM category WHERE id='".$catId."'");
    return new Category(mysqli_fetch_assoc($result));
  }
}
?>