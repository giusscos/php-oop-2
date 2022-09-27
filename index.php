<?php

include __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/PetFood.php';

$data = [
    "name" => 'Croccantini di pollo',
    "brand" => 'Sium',
    "desc" => 'Croccantini per animali fantastici',
    "price" => 29.00,
];

$prod1 = new Product($data);

$dataFood = [
    "expire-date" => "10/01/2022",
];

$food1 = new PetFood($data, $dataFood);

var_dump($food1);