<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{
    public $expire_date;

    function __construct($param)
    {
        parent::__construct($param);
        $this->expire_date = $param["expire_date"];
    }
}
