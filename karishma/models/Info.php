<?php
Class Info {
  public function __construct($data) {
    $this->id = ($data["id"]) ? $data["id"] : "";
    $this->name = ($data["name"]) ? $data["name"] : "";
    $this->value = ($data["value"]) ? $data["value"] : "";
  }

  static public function getInfo($infoId) {
    $result = Db::connect()->data("SELECT * FROM global WHERE id = '".$infoId."'");
    return new Info(mysqli_fetch_assoc($result));
  }
}
?>