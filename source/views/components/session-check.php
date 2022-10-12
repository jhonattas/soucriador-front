<?php 
  if((!isset ($_SESSION['logged']) == true) /*and (!isset ($_SESSION['senha']) == true) */) {
    // unset($_SESSION['cart']);
    // unset($_SESSION['senha']);
    // header('location:index.php');
  } else {
    echo 'ESTA SETADO';
  }
?>