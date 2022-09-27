<?php

include_once __DIR__ . '/Order.php';

class ItemOrder extends Order {
    public $quantity = 0; // quantita' prodotti uguali

    function __construct()
    {
        $this->addQuantity();
    }

    public function addQuantity(){
        if(in_array($this->product, $this->products)){
            $this->quantity++;
        }else {
            var_dump('non funziona');
        }
    }
}