<?php

class Product
{
    public $name;
    public $desc;
    public $price = 0.00;
    public $brand;
    public $volume = 0.00;

    function __construct($param)
    {
        $this->name = $param["name"];
        $this->desc = $param["desc"];
        $this->price = $param["price"];
        $this->brand = $param["brand"];
        $this->volume = $param["volume"];
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getVolume(){
        return $this->volume;
    }
}
