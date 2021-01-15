<?php
header('Content-Type: application/json');
$row = 1;
$endereco_csv =  URL_BASE . "assets/csv/lote01.csv";

if (($handle = fopen($endereco_csv, "r")) !== FALSE) {
  $images = array();

  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    $num = count($data);
    $row++;
    $image = createImage($data[0]);

    array_push($images, $image);
  }
  fclose($handle);

  $images_json = array();

  $images_array = new ProductJSON();
  $images_array->products_image = $images;
  echo json_encode($images_array);
}

function createImage($imageURL) {
  $product = new Product;
  $product->url = $imageURL;
  return $product;
}

class Product {
  var $url;
}

class ProductJSON {
  var $products_image = array();
}