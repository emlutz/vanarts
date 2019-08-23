<?php
Class Content {
  public function __construct($data) {
    $this->id = ($data["id"]) ? $data["id"] : "";
    $this->title = ($data["title"]) ? $data["title"] : "";
    $this->description = ($data["description"]) ? $data["description"] : "";
    $this->image = ($data["image"]) ? $data["image"] : "";
    $this->link = ($data["link"]) ? $data["link"] : "";
    $this->sub = ($data["subHeading"]) ? $data["subHeading"] : "";
    $this->body = ($data["body"]) ? $data["body"] : "";
  }
  
  static public function getVideo($contentId) {
    $result = Db::connect()->data("SELECT * FROM video WHERE id = '".$contentId."'");
    $row = mysqli_fetch_assoc($result);
    return new Content($row);
  }
  
  static public function getPodcast($contentId) {
    $result = Db::connect()->data("SELECT * FROM podcast WHERE id = '".$contentId."'");
    $row = mysqli_fetch_assoc($result);
    return new Content($row);
  }
  
  static public function getBlog($contentId) {
    $result = Db::connect()->data("SELECT * FROM blog WHERE id = '".$contentId."'");
    $row = mysqli_fetch_assoc($result);
    return new Content($row);
  }
}
?>