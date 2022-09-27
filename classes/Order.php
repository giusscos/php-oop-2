<?php

require_once __DIR__ . '/Product.php';

class Order{
    public $date_order;
    public $total_order = 0;
    public $product;
    public $products = [];

    function __construct($date_order, $product)
    {
        $this->getTotal();  
        $this->date_order = $date_order;   
        $this->addProduct($product);  
    }

    public function getTotal(){
        return $this->total_order = $this->total_order;
    }

    public function addProduct($product){
        array_push($this->products, $product);
    }
}