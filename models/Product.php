<?php
require_once __DIR__ . '/../Traits/Name.php';
class Product
{
    public $id;
    public $price;
    public $category;
    public $type;
    public $image;

    use Name;

    public function __construct($_id, $_name, $_price, $_category, $_type, $_image)
    {
        $this->id = $_id;
        $this->setName($_name);
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
        return "ID: {$this->id}, Name: {$this->getName()}, Price: {$this->price}, Category: {$this->category}, Type: {$this->type}, Image: {$this->image}";
    }
}


echo 'ciao';

try {
    $prova = new Product(1645, 4, 245, 'Cani', 'Giochi', 'asdasd');
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($prova);
