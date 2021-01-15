<?php
session_start();
header('Content-Type: application/json');

$productId =    isset($_POST['productId'])    ? $_POST['productId'] : 0;
$storeID   =    isset($_POST['storeID'])      ? $_POST['storeID'] : 0;
$productTitle = isset($_POST['productTitle']) ? $_POST['productTitle'] : "não consta";
$productPrice = isset($_POST['productPrice']) ? $_POST['productPrice'] : "0.00";
$productThumb = isset($_POST['productImage']) ? $_POST['productPrice'] : "";
$itensCount =   isset($_POST['itensCount'])   ? $_POST['itensCount'] : 0;

if(isset($_SESSION['cart']) == false) {
  $_SESSION['cart'] = array();
}

$product = array(
  "productId"=>$productId,
  "storeID"=>$storeID,
  "productTitle"=>$productTitle,
  "productPrice"=>$productPrice,
  "productImage"=>$productImage
);

array_push($_SESSION["cart"], $product);

$totalProdutos = sizeof($_SESSION['cart']);
$totalPrice = 0;

foreach($_SESSION["cart"] as $productLoop){
  $totalPrice = $totalPrice + $productLoop["productPrice"];
}

if(
    (isset($_SESSION['cart-total'])) and (isset($_SESSION['cart-count']))
  ){
  $_SESSION['cart-total'] = $totalPrice;
  $_SESSION['cart-count'] = count($_SESSION["cart"]);
} else {
  $_SESSION["cart-total"] = "0.00";
  $_SESSION["cart-count"] = 0;
}

$resposta = array(
  "products"=>$_SESSION["cart"],
  "total"=>$totalProdutos,
  "totalPrice"=>$totalPrice
);

echo json_encode($resposta);