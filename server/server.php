<?php

require_once __DIR__ . '/../database/db.php';

$result = $products_db;

// Con USE permettiamo alla funzione di leggere la variabile che passiamo tra parentesi,
// in questo caso viene usata come condizione per inserire il prodotto nell'array (true).

if (!empty($_GET['category'])) {
    $selectedCategory = $_GET['category'];
    $result = array_filter($result, function ($product) use ($selectedCategory) {
        return $product['category'] === $selectedCategory;
    });
}

if (!empty($_GET['type'])) {
    $selectedType = $_GET['type'];
    $result = array_filter($result, function ($product) use ($selectedType) {
        return $product['type'] === $selectedType;
    });
}

header('Content-Type: application/json');
echo json_encode($result);
