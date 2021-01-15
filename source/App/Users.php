<?php
namespace Source\App;

require __DIR__ . "/CommonFunctions.php";

class Users {

  // dashboard
  public function dashboard($data) {
    if(!isset($_SESSION['token'])){
      Redirect(URL_BASE . 'identificacao', false);
    } else {
      $categories       = loadCategories();
      require __DIR__ . "../../views/user-dashboard.php";
    }
  }

  // cadastro
  public function sign_up($data) {
    if(isset($_SESSION['token'])){
      Redirect(URL_BASE . 'meuperfil', false);
    }
    require __DIR__ . "../../views/sign-up.php";
  }

  // login
  public function sign_in($data) {
    if(isset($_SESSION['token'])){
      Redirect(URL_BASE . 'meuperfil', false);
    }
    require __DIR__ . "../../views/sign-in.php";
  }

}