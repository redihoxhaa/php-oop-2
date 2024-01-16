<?php

class Cart
{

    public $products_to_check_out;
    public $total;

    public function __construct()
    {
        $this->products_to_check_out = [];
        $this->total = 0;
    }

    public function addProduct($product)
    {
        $this->products_to_check_out[] = $product;
        $this->total += $product->price;
    }

    public function removeProduct($productId)
    {
        foreach ($this->products_to_check_out as $key => $product) {
            if ($product->id === $productId) {
                $this->total -= $product->price;
                array_splice($this->products_to_check_out, $key, 1);
                break;
            }
        }
    }

    public function getCartDetails()
    {
        return $this->products_to_check_out;
    }

    public function getTotalPrice()
    {
        return $this->total;
    }
}
