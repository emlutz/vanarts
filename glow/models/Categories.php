<?php
Class Categories extends Model {
  public static function getAll() {
    $result = Db::connect()->data("SELECT * FROM category ORDER BY name");
    while($record = mysqli_fetch_assoc($result)) {
      $categories[] = $record;
    }
    return $categories;
  }
}
?>