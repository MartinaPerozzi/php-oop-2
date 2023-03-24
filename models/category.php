<?php

class Categorie
{
    protected $name;
    // private static $accepted_categories = [
    //     "Dog",
    //     "Cat"
    // ];

    public function __construct(string $_name)
    {
        $this->name = $_name;
    }

    // public function setName($name)
    // {
    //     // cerco nell'array le categorie accettate
    //     if (!is_string($name) || !in_array($name, self::$$accepted_categories)) return false;
    //     $this->name = $name;

    //     return $this;
    // }
    // public function getName()
    // {
    //     return $this->name;
    // }
}

$dog = new Categorie("Dog");
$cat = new Categorie("Cat");
