<?php
session_start();
header('Content-Type: application/json');

$_SESSION['cart'] = array();
$_SESSION['cart-total'] = "0.00";
$_SESSION['cart-count'] = 0;

$resposta = array(
  "products"=>$_SESSION["cart"],
  "total"=>$$_SESSION['cart-total'],
  "totalPrice"=>$$_SESSION['cart-count']
);

echo json_encode($resposta);