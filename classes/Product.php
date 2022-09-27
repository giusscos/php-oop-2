<?php

class Product
{
    public $name;
    public $desc;
    public $price = 0;
    public $brand;

    function __construct($param)
    {
        $this->name = $param["name"];
        $this->desc = $param["desc"];
        $this->price = $param["price"];
        $this->brand = $param["brand"];
    }

    public function getPrice()
    {
        return $this->price;
    }
}
