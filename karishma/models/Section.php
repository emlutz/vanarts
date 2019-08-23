<?php
Class Section {
  public function __construct($data) {
    $this->id = $data["id"];
    $this->heading = $data["heading"];
    $this->image = $data["image"];
    $this->subHeading = $data["subHeading"];
    $this->body = $data["body"];
  }

  public static function get($sectionId) {
    $result = Db::connect()->data("SELECT * FROM section WHERE id='".$sectionId."'");
    return new Section(mysqli_fetch_assoc($result));
  }
}
?>