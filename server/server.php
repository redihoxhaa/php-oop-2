<?php

require_once __DIR__ . '/../database/db.php';

$result = $products_db;

if (isset($_GET['category'])) {
    $selectedCategory = $_GET['category'];
    $result = array_filter($result, function ($product) use ($selectedCategory) {
        return $product['category'] === $selectedCategory;
    });
}

if (isset($_GET['type'])) {
    $selectedType = $_GET['type'];
    $result = array_filter($result, function ($product) use ($selectedType) {
        return $product['type'] === $selectedType;
    });
}

header('Content-Type: application/json');
echo json_encode($result);
