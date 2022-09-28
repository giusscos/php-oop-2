<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/MadeOf.php';

class PetHouse extends Product
{
    public $square;
    use MadeOf;

    function __construct($param, float $square, string $material)
    {
        parent::__construct($param);
        $this->setMaterial($material);
        if($square){
            $this->square = $square;
        } else{
            throw new Exception('Inserimento metri quadrati non valido');
        }
    }
}
