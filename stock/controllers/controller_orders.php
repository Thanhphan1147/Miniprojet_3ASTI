<?php
  class OrdersController {

    public function __construct(){}

    public function index() {
     
      $order = new Order();
      $orders=$order->get_all_orders();
      require_once('views/orders/index.php');

    }

    public function show() {

      if (!isset($_GET['orderid'])) return routing('pages', 'error');      
      $order= new Order();
      $myorder=$order->find($_GET['orderid']);
      require_once('views/orders/show.php');

   }

   public function new() {
      $order = new Order();
   }
 }
?>
