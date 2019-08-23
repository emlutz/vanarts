<?php
Class Products extends Model {
  public static function getFeature() {
    $result = Db::connect()->data("SELECT * FROM product WHERE featured = '1'");
    while($record = mysqli_fetch_assoc($result)) {
      $products[] = new Product($record);
    }
    shuffle($products);
    $products = array_splice($products, 0, 3);
    return $products;
  }

  public static function getCategory($catId) {
    $catId = filter_var($catId, FILTER_SANITIZE_NUMBER_INT);
    if(!$catId) {
      echo "There are no categories";
      die;
    }
    $products = array();
    $result = Db::connect()->data(
      "SELECT 
        product.id,
        product.name,
        product.coverImg,
        product.price,
        product.qty,
        product.sku,
        product.description,
        product.featured,
        pc.categoryId
      FROM
        `product`
      LEFT JOIN
        product_category pc ON
          pc.productId = product.id
      WHERE
        pc.categoryId = $catId");
    while($record = mysqli_fetch_assoc($result)) {
      $products[] = new Product($record);
    }
    return $products;
  }
}
?>