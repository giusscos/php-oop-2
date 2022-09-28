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

// Creazione prodotti specifici 
try{
    $food1 = new PetFood($dataFood, '20/09/2022');
} catch(Exception $e){
    echo $e;
}

try{
    $toy1 = new PetToy($dataToy, 'Plastica');
}catch (Exception $e){
    echo $e;
}

try{
    $house1 = new PetHouse($dataHouse, 10, 'Argilla');
}catch (Exception $e){
    echo $e;
}

var_dump($toy1->getMaterial());
var_dump($house1->getMaterial());

$order1 = new Order();

// Aggiunta prodotti all'ordine 
$order1->addProduct($food1, $food1->getPrice());
$order1->addProduct($food1, $food1->getPrice());
$order1->addProduct($toy1, $toy1->getPrice());

// var_dump($order1);
var_dump($order1->getTotal());
var_dump($order1->getQuantity());