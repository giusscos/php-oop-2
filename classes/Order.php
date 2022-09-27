<?php

class Order{
    public $date_order;
    public $total_order = 0.00;
    public $quantity = 0; // quantita' totale ordine
    public $products = [];

    function __construct()
    {
        // $this->getTotal($price);  
        // $this->date_order = $date_order;   
        // $this->addProduct($product);  
    }

    public function addProduct($product, $price){
        $this->quantity++;
        $this->total_order = $this->total_order + $price;
        array_push($this->products, $product);
    }

    public function getTotal(){
        return $this->total_order;
    }
}