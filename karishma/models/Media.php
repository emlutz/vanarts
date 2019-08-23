<?php
Class Media extends Model {
  public static function getFeature() {
    $result = Db::connect()->data("SELECT * FROM video WHERE featured = '1'");
    while($record = mysqli_fetch_assoc($result)) {
      $featured[] = new Content($record);
    }
    return $featured;
  }
  
  static public function getVideos() {
    $result = Db::connect()->data("SELECT * FROM video ORDER BY id DESC");
    while($record = mysqli_fetch_assoc($result)) {
      $videos[] = $record;
    }
    return $videos;
  }
  
  static public function getPodcasts() {
    $result = Db::connect()->data("SELECT * FROM podcast ORDER BY id DESC");
    while($record = mysqli_fetch_assoc($result)) {
      $podcasts[] = $record;
    }
    return $podcasts;
  }
  
  static public function getBlogs() {
    $result = Db::connect()->data("SELECT * FROM blog ORDER BY id DESC");
    while($record = mysqli_fetch_assoc($result)) {
      $blogs[] = $record;
    }
    return $blogs;
  }
}
?>