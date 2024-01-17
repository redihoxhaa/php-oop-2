<?php
session_start();

require_once __DIR__ . '/../Controllers/ControllerCart.php';
require_once __DIR__ . '/../Controllers/ControllerProducts.php';

$productID = $_GET['productID'];

$product = getProductByID($productID, $products);

if ($product) {
    addProductToCart($cart, $product);
}

echo json_encode($cart);
