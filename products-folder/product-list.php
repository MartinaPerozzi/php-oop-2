<?php

require_once __DIR__ . "/../models/product.php";
require_once __DIR__ . "/../models/category.php";
require_once __DIR__ . "/../models/food.php";
require_once __DIR__ . "/../models/toy.php";
require_once __DIR__ . "/../models/bed.php";

// DOGS
$products_food = [
    new Product("Purizon", "Complemental food for your pet", 12, [$dog]),
    new Product("Royal Canin", "Complemental food for your pet", 14, [$dog]),
    new Product("Monge", "Complemental food for your pet", 10, [$dog]),
];

$products_toy = [
    new Product("Kong", "Chew toys", 12, [$dog]),
    new Product("Squeak", "chew toy with stimulating ham aroma", 14, [$dog]),
    new Product("Peluche", "Fillable dog toy - Made of 100 % natural rubber, floatable with tooth-cleaning surface", 10, [$dog]),
];

$products_bed = [
    new Product("FunnyFuzzy", "Comfy Calming Bed", 53, [$dog]),
    new Product("Zooplus", "Donut Bed", 34, [$dog]),
    new Product("Peluche", "Ortophedic Bed", 80, [$dog]),
];

// CAT
$products_food = [
    new Product("Purizon", "Complemental food for your pet", 12, [$cat]),
    new Product("Royal Canin", "Complemental food for your pet", 14, [$cat]),
    new Product("Monge", "Complemental food for your pet", 10, [$cat]),
];

$products_toy = [
    new Product("Kong", "Chew toys", 12, [$cat]),
    new Product("Squeak", "chew toy with stimulating ham aroma", 14, [$cat]),
    new Product("Peluche", "Fillable dog toy - Made of 100 % natural rubber, floatable with tooth-cleaning surface", 10, [$cat]),
];

$products_bed = [
    new Product("FunnyFuzzy", "Comfy Calming Bed", 53, [$cat]),
    new Product("Zooplus", "Donut Bed", 34, [$cat]),
    new Product("Peluche", "Ortophedic Bed", 80, [$cat]),
];
