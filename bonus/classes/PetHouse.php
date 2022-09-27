<?php

include_once __DIR__ . '/Product.php';

class PetHouse extends Product
{
    public $square;

    function __construct($param, $square)
    {
        parent::__construct($param);
        $this->square = $square;
    }
}
