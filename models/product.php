<?php
require_once __DIR__ . "/category.php";
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
