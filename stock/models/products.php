<?php

class Product
{
    public $prodid;
    public $catid;
    public $name;
    public $price;
    public $description;
    public $img;

    public function __construct(
        $prodid = false,
        $catid = false,
        $name = false,
        $price = false,
        $description = false,
        $img = false
    ) {
        if ($id === false) return;

        $this->prodid = $id;
        $this->catid = $catid;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->img = $img;
    } //end construct

    public function get_products()
    {
        global $con;
        $list = array();
        //$con = DBConnect::getInstance(); //static method
        $prod = $con->query('SELECT * FROM products');

        foreach ($prod as $prod)
            $list[] = new Product($prod['prodid'], $prod['catid'], $prod['name'], $prod['price'], $prod['description'], $prod['img']);
        return $list;
    }
}//end class Products
