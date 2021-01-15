<?php
namespace Source\App;

require __DIR__ . "/CommonFunctions.php";

class Pages {

  var $categories, $products, $featuredImages = array();

  public function home($data) {
    // $categories       = loadCategories();
    // $page             = printPageEnd();
    // $pagination       = loadPagination();
		// $featured_images  = loadFeaturedImages();
		// $products         = loadProductsFeatured();
    require __DIR__ . "../../views/homepage.php";
  }

  public function promotions($data){
    $categories       = loadCategories();
    require __DIR__ . "../../views/promotions.php";
  }

  public function maintenance($data){
    require __DIR__ . "../../views/maintenance.php";
  }
  
  public function greetings($data){
    require __DIR__ . "../../views/emails/greetings.php";
  }

  public function stores($data){
    $pagination       = loadPagination();
    $categories       = loadCategories();
    $featured_images  = loadFeaturedImages();
    require __DIR__ . "../../views/stores.php";
  }
}