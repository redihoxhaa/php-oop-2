<?php

require_once __DIR__ . '/../Models/Cart.php';
require_once __DIR__ . '/../Models/Product.php';

$cart = new Cart();

function addProductToCart($cart, $product)
{
    $cart->addProduct($product);
}

function removeProductFromCart($cart, $productId)
{
    $cart->removeProduct($productId);
}

function getCartDetails($cart)
{
    return $cart->getCartDetails();
}

function calculateTotalPrice($cart)
{
    return $cart->getTotalPrice();
}
