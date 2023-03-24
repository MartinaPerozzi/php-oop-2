<?php
require_once __DIR__ . "/product.php";


class Toy extends Product
{
    public $type;

    public function __construct(string $_name, string $_description, int $_price, Categorie $_category, string $_type)
    {
        parent::__construct($_name, $_description, $_price, $_category, $_type);
        $this->type = $_type;
    }
}
