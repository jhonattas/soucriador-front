<?php
session_start();
header('Content-Type: application/json');

$productId = isset($_POST['productId']) ? $_POST['productId'] : 0;

array_splice($_SESSION["cart"], $productId, $productId);

$totalProdutos = sizeof($_SESSION['cart']);
$totalPrice = 0;

foreach($_SESSION["cart"] as $productLoop){
  $totalPrice = $totalPrice + $productLoop["productPrice"];
}

$_SESSION['cart-total'] = $totalPrice;
$_SESSION['cart-count'] = $totalProdutos;

$resposta = array(
  "products"=>$_SESSION["cart"],
  "total"=>$totalProdutos,
  "totalPrice"=>$totalPrice
);

echo json_encode($resposta);