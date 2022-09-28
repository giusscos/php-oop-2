<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{
    public $expire_date;

    function __construct($param, string $expire_date)
    {
        parent::__construct($param);
        if($expire_date){
            $this->expire_date = $expire_date;
        } else {
            throw new Exception('Inserimento data non valida');
        }
    }
}
