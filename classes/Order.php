<?php

class Order
{
    public $date_order;
    public $total_order = 0.00;
    public $quantity = 0; // quantita' totale ordine
    public $products = [];

    function __construct()
    {
    }

    public function addProduct($product, $price)
    {
        $this->quantity++;
        $this->total_order = $this->total_order + $price;
        array_push($this->products, $product);
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getTotal()
    {
        return 'Totale ordine: &euro; ' . $this->total_order . ';';
    }
    public function getQuantity()
    {
        return 'Hai ordinato: ' . $this->quantity . ' oggetti!';
    }
}
