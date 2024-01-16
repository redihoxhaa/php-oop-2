<?php

class Cart
{

    public $products;
    public $total;

    public function __construct()
    {
        $this->products = [];
        $this->total = 0;
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
        $this->total += $product->price;
    }

    public function removeProduct($productId)
    {
        foreach ($this->products as $key => $product) {
            if ($product->id === $productId) {
                $this->total -= $product->price;
                array_splice($this->products, $key, 1);
                break;
            }
        }
    }

    public function getCartDetails()
    {
        return $this->products;
    }

    public function getTotalPrice()
    {
        return $this->total;
    }
}
