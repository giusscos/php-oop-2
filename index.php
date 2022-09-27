<?php

include __DIR__ . '/classes/Product.php';

$data = [
    "name" => 'Croccantini di pollo',
    "brand" => 'Sium',
    "desc" => 'Croccantini per animali fantastici',
    "price" => 29.00,
];

$prod1 = new Product($data);

var_dump($prod1);
