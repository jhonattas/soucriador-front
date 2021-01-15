<?php

namespace Source\App;

require __DIR__ . "/CommonFunctions.php";

class Products {
  
  // inicializacao de arrays
  var $categories, $products, $pagination, $featuredImages = array();

  public function index($data) {
    $page             = printPageEnd();
    $pagination       = loadPagination();
  	$categories       = loadCategories();
  	$featured_images  = loadFeaturedImages();
    $products         = loadProducts(0);

    require __DIR__ . "../../views/catalog.php";
  }

  public function page_id($data) {
    $page             = printPageEnd();
    $categories       = loadCategories();
    $featured_images  = loadFeaturedImages();
    $products         = loadProducts($page);

    $pagination->first = $data["page_id"];
    $pagination->last = $data["page_id"] + 5;

    require __DIR__ . "../../views/catalog.php";
  }

  public function subcategory($data) {
    $page             = printPageEnd();
    $pagination       = loadPagination();
		$categories       = loadCategories();
    $featured_images  = loadFeaturedImages();
    
    $productsSubcategory = loadProductsBySubcategory($data["subcategory_id"]);
    // populate template informations
    $category_solo    = $productsSubcategory->category;
    $subcategory_solo = $productsSubcategory->subcategory;
    $products         = $productsSubcategory->products;
    require __DIR__ . "../../views/catalog.php";
  }

  public function details($data) {
		$categories = loadCategories();
    $product    = loadProduct($data["product_id"]);
    require __DIR__ . "../../views/product-details.php";
  }

  public function cart_details($data) {
    if(!isset($_SESSION['token'])){
      Redirect(URL_BASE . 'identificacao', false);
    }
    
    $page             = printPageEnd();
    $pagination       = loadPagination();
    $categories       = loadCategories();
    $featured_images  = loadFeaturedImages();

    require __DIR__ . "../../views/cart-details.php";
  }

  /** Cart Sessions Functions */
  public function update_cart($data){
    require __DIR__ . "../../functions/cart.php";
  }

  public function remove_cart($data){
    require __DIR__ . "../../functions/cart-remove.php";
  }

  public function clear_cart($data){
    require __DIR__ . "../../functions/cart-empty.php";
  }

  public function open_csv($data){
    require __DIR__ . "../../functions/products-import.php";
  }
}