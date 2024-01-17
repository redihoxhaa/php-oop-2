<?php

require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . '/../Models/Product.php';

$products = [];

foreach ($products_db as $product) {
    array_push($products, new Product($product['id'], $product['name'], $product['price'], $product['category'], $product['type'], $product['image']));
}
