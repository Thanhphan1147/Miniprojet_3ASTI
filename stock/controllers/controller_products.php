<?php
  class ProductsController {

    public function __construct(){}

    public function index() {
     
      $prod = new Product();
      $prod=$prod->get_products();
      // $prod=$prod->get_products_categorie('1');
      require_once('views/produits/index.php');

    }

    public function show() {

      if (!isset($_GET['catid'])) return routing('pages', 'error');      

      $prod = new Product();
      $prod=$prod->get_products_categorie($_GET['catid']);
      require_once('views/produits/index.php');

   }

   public function detail() {
    if (!isset($_GET['prodid'])) return routing('pages', 'error'); 

    // echo $_GET['prodid'];
    $prod = new Product();
    $prod = $prod->get_product_detail($_GET['prodid']);
    require_once('views/produits/show.php');
   }
}
?>
