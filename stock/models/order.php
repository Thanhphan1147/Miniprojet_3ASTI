<?php

class Order
{
    public $orderid;
    public $customerid;
    public $amount;
    public $date;
    public $order_status;
    public $ship_name;
    public $ship_address;
    public $ship_city;
    public $ship_state;
    public $ship_zip;
    public $ship_country;

    public function __construct(
        $orderid = false,
        $customerid = false,
        $amount = false,
        $date = false,
        $order_status = false,
        $ship_name = false,
        $ship_address = false,
        $ship_city = false,
        $ship_state = false,
        $ship_zip = false,
        $ship_country = false
    ) {
        if ($orderid === false) return;

        $this->orderid = $orderid;
        $this->customerid = $customerid;
        $this->amount = $amount;
        $this->date = $date;
        $this->order_status = $order_status;
        $this->ship_name = $ship_name;
        $this->ship_address = $ship_address;
        $this->ship_city = $ship_city;
        $this->ship_state = $ship_state;
        $this->ship_zip = $ship_zip;
        $this->ship_country = $ship_country;
    } //end construct

    public function get_all_orders()
    {
        global $con;
        $list = array();
        //$con = DBConnect::getInstance(); //static method
        $orders = $con->query('SELECT * FROM orders');

        foreach ($orders as $order)
            $list[] = new Order($order['orderid'], $order['customerid'], $order['amount'], $order['date'], $order['order_status']);
        return $list;
    }
    public function find($orderid)
    {
        global $con;
        // $orderid = intval($orderid);
        // $req = $con->prepare("SELECT * FROM orders where orderid = ':orderid'");
        // $req->execute(array(':orderid' => $orderid));
        $req = $con->query("SELECT * FROM orders where orderid = '$orderid'");
        $order = $req->fetch();
        // echo $order['ship_name'];
        return new Order(
            $order['orderid'],
            $order['customerid'],
            $order['amount'],
            $order['date'],
            $order['order_status'],
            $order['ship_name'],
            $order['ship_address'],
            $order['ship_city'],
            $order['ship_state'],
            $order['ship_zip'],
            $order['ship_country']
        );
    }
}//end class Order
