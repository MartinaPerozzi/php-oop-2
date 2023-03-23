<?php

class Categorie
{
    public $name;

    public function __construct(string $_name)
    {
        $this->name = $_name;
    }
}

$dog = new Categorie("Dog");
$cat = new Categorie("Cat");
