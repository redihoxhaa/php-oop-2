<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $category;
    public $type;
    public $image;

    public function __construct($_id, $_name, $_price, $_category, $_type, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->setCategory($_category);
        $this->type = $_type;
        $this->image = $_image;
    }

    private function setCategory($category)
    {
        if ($category === "Cani" || $category === "Gatti") {
            $this->category = $category;
        } else {
            echo "Uniche categorie accettate: 'Cani' o 'Gatti'";
        }
    }

    public function getDetails()
    {
        return "ID: {$this->id}, Name: {$this->name}, Price: {$this->price}, Category: {$this->category}, Type: {$this->type}, Image: {$this->image}";
    }
}
