<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{
    public $expire_date;

    function __construct($param, $expire_date)
    {
        parent::__construct($param);
        $this->expire_date = $expire_date;
    }
}
