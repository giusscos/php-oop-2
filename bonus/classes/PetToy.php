<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/MadeOf.php';

class PetToy extends Product
{
    use MadeOF;

    function __construct($param, string $material)
    {
        parent::__construct($param);
        $this->setMaterial($material);
    }
}
