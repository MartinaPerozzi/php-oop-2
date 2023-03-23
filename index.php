<?php

// Creo una classe Movie
class Product
{
    // Con le sue specifiche caratteristiche
    public $name;
    public $description;
    public $price;
    public $arraycategories;


    // Mi passo le variabili con un costruttore e specifico il TIPO di dato per evitare problemi futuri
    public function __construct(string $_name, string $_description, int $_price, array $_arraycategories)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->arraycategories = $_arraycategories;
    }
}

class Categorie
{
    public $name;
    public $size;

    public function __construct($_name, $_size)
    {
        $this->name = $_name;
        $this->size = $_size;
    }
}

$foodS = new Categorie("croquettes", "small");
$foodM = new Categorie("croquettes", "medium");
$foodL = new Categorie("croquettes", "large");
$bedS = new Categorie("bed", "small");
$bedM = new Categorie("bed", "medium");
$bedM = new Categorie("bed", "large");
$toys = new Categorie("ball", "unique");

$products = [
    new Product("Pet Food", "Complemental food for your pet", 12.50, [$foodS]),
];
