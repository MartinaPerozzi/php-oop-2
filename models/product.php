<?php
require_once __DIR__ . "/category.php";
// Creo una classe Movie
class Product
{
    // Con le sue specifiche caratteristiche
    public $name;
    public $description;
    public $price;
    public $category;


    // Mi passo le variabili con un costruttore e specifico il TIPO di dato per evitare problemi futuri
    public function __construct(string $_name, string $_description, float $_price, Categorie $_category)
    {
        $this->name = $_name;
        $this->description = $_description;
        $this->price = $_price;
        $this->category = $_category;
    }
    public function setName($name)
    {
        if (!is_string($name) || $name === "") return false;
        $this->name = $name;

        return $this;
    }
}
