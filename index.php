<?php

include __DIR__ . '/classes/Order.php';

include_once __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/PetFood.php';
include_once __DIR__ . '/classes/PetToy.php';
include_once __DIR__ . '/classes/PetHouse.php';

$dataFood = [
    "name" => 'Croccantini di pollo',
    "brand" => 'Sium',
    "desc" => 'Croccantini per animali fantastici',
    "price" => 29.17,
];
$dataToy = [
    "name" => 'Corda per denti di ferro',
    "brand" => 'Sium',
    "desc" => 'Una corda super resistente per animali fantastici',
    "price" => 59.99,
];
$dataHouse = [
    "name" => 'PentCuccia da Sogno',
    "brand" => 'Sium',
    "desc" => 'Una casa per animali fantastici',
    "price" => 99.70,
];

$food1 = new PetFood($dataFood, '10/10/2022');
$toy1 = new PetToy($dataToy, 'Tessuto');
$house1 = new PetHouse($dataHouse, 10);

$order1 = new Order('27/09/2022', $food1);

$order1->addProduct($toy1);

var_dump($order1);