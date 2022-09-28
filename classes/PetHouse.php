<?php

include_once __DIR__ . '/Product.php';

class PetHouse extends Product
{
    public $square;

    function __construct($param, float $square)
    {
        parent::__construct($param);
        if($square){
            $this->square = $square;
        } else{
            throw new Exception('Inserimento metri quadrati non valido');
        }
    }
}
