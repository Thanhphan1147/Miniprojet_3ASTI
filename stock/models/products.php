<?php

class Product
{
    public $prodid;
    public $catid;
    public $catname;
    public $name;
    public $price;
    public $description;
    public $img;

    public function __construct(
        $prodid = false,
        $catid = false,
        $catname = false,
        $name = false,
        $price = false,
        $description = false,
        $img = false
    ) {
        if ($prodid === false) return;

        $this->prodid = $prodid;
        $this->catid = $catid;
        $this->catname = $catname;
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
        $prod = $con->query('SELECT * FROM products NATURAL JOIN categories');

        foreach ($prod as $prod)
            $list[] = new Product($prod['prodid'], $prod['catid'], $prod['catname'] , $prod['name'], $prod['price'], $prod['description'], $prod['img']);
        return $list;
    }

    public function get_products_categorie($catid)
    {
        global $con;
        $list = array();
        $prod = $con->query("SELECT * FROM products NATURAL JOIN categories where catid = '$catid'");

        foreach ($prod as $prod)
        $list[] = new Product($prod['prodid'], $prod['catid'], $prod['catname'] , $prod['name'], $prod['price'], $prod['description'], $prod['img']);
        return $list;
    }

    public function get_product_detail($prodid)
    {
        global $con;
        $prod = $con->query("SELECT * FROM products where prodid = '$prodid'");

        foreach ($prod as $prod)
            // echo $prod['description'];
            $list[] = new Product($prod['prodid'], $prod['catid'], false , $prod['name'], $prod['price'], $prod['description'], $prod['img']);
        return $list;
    }

}//end class Products
