<?php
if(getenv('mode') == 'development'){
  define("URL_BASE", getenv('URL_BASE'));
  define("API", "http://localhost:3458/");
} else {
  define("URL_BASE", "https://soucriador.com/");
  define("API", "https://api.soucriador.com/");
}
define("API_IMAGES", API . "static/images/");
define("mainTitle", "Sou Criador");

session_start();

// caso a variavel de sessao nao exista
if(
  isset($_SESSION['cart'])
  &&
  isset($_SESSION['cart-total']) 
  && 
  isset($_SESSION['cart-count'])
){
  // TODO
} else {
  $_SESSION['cart'] = array();
  $_SESSION['cart-total'] = "0.00";
  $_SESSION['cart-count'] = 0;
}
