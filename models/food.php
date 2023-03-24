<?php

require_once __DIR__ . "/product.php";

class Food extends Product
{
    public $date;

    public function __construct(string $_name, string $_description, int $_price, Categorie $_category, string $_date)
    {
        parent::__construct($_name, $_description, $_price, $_category, $_date);

        $this->date = $_date;
    }
}
