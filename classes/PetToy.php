<?php

include_once __DIR__ . '/Product.php';

class PetToy extends Product
{
    public $material;

    function __construct($param, string $material)
    {
        parent::__construct($param);
        if($material){
            $this->material = $material;
        } else {
            throw new Exception('Inserimento materiale non valido');
        }
    }
}
