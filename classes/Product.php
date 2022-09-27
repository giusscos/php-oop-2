<?php

class Product
{
    public $name;
    public $desc;
    public $price;
    public $brand;

    function __construct($param)
    {
        $this->name = $param["name"];
        $this->desc = $param["desc"];
        $this->price = $param["price"];
        $this->brand = $param["brand"];
    }
}
