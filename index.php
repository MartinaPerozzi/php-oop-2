<?php

// Creo una classe Movie
class Products
{
    // Con le sue specifiche caratteristiche
    public $name;
    public $description;
    public $price;
    public $arraycategories;


    // Mi passo le variabili con un costruttore e specifico il TIPO di dato per evitare problemi futuri
    public function __construct(string $_name, string $_description, string $_price, array $_arraycategories)
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

    public function __construct($_name)
    {
        $this->name = $_name;
    }
}
