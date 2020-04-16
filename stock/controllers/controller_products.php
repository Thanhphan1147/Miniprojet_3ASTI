<?php
  class ProductsController {

    public function __construct(){}

    public function index() {
     
      $prod = new Product();
      $prod=$prod->get_products();
      require_once('views/produits/index.php');

    }
}
?>
