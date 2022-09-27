<?php

include_once __DIR__ . '/classes/Order.php';

include_once __DIR__ . '/classes/Product.php';
include_once __DIR__ . '/classes/PetFood.php';
include_once __DIR__ . '/classes/PetToy.php';
include_once __DIR__ . '/classes/PetHouse.php';

// Creazione prodotti
$dataFood = [
    "name" => 'Croccantini di pollo',
    "brand" => 'Sium',
    "desc" => 'Croccantini per animali fantastici',
    "price" => 29.17,
    "volume" => 40,
];
$dataToy = [
    "name" => 'Corda per denti di ferro',
    "brand" => 'Sium',
    "desc" => 'Una corda super resistente per animali fantastici',
    "price" => 59.99,
    "volume" => 1,
];
$dataHouse = [
    "name" => 'PentCuccia da Sogno',
    "brand" => 'Sium',
    "desc" => 'Una casa per animali fantastici',
    "price" => 99.70,
    "volume" => 150,
];

// Creazione prodotti specifici 
$food1 = new PetFood($dataFood, '10/10/2022');
$toy1 = new PetToy($dataToy, 'Tessuto');
$house1 = new PetHouse($dataHouse, 10);

$order1 = new Order();

// Aggiunta prodotti all'ordine 
$order1->addProduct($food1, $food1->getPrice(), $food1->getVolume());
$order1->addProduct($food1, $food1->getPrice(), $toy1->getVolume());
$order1->addProduct($toy1, $toy1->getPrice(), $house1->getVolume());

// var_dump($order1);
var_dump($order1->getTotal());
var_dump($order1->getQuantity());
var_dump($order1->getShipping());