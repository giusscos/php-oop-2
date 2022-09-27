<?php

class Order
{
    public $date_order;
    public $total_order = 0.00;
    public $total_volume = 0.00;
    public $quantity = 0; // quantita' totale ordine
    public $products = [];
    public $shipping = 0;

    function __construct()
    {
    }

    public function addProduct($product, $price, $volume)
    {
        $this->quantity++;
        $this->total_volume = $this->total_volume + $volume;
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

    public function getShipping()
    {
        $volume = $this->total_volume;

        if ($this->total_order < 200) {
            switch ($volume) {
                case $volume > 100 && $volume < 200:
                    $this->shipping = 50;
                    break;
                case $volume > 200 && $volume < 300:
                    $this->shipping = 80;
                    break;
                case $volume > 300:
                    $this->shipping = 120;
                    break;
                default:
                    $this->shipping = 30;
            }
        } else {
            $this->shipping = 0;
        }
        return 'Spese di spedizione: &euro;' . $this->shipping . ';';
    }
}
