<?php

class Customer
{

    public $id;
    public $name;
    public $email;
    public $isRegistered;
    public $discount;

    public function __construct($_id, $_name, $_email, $_isRegistered, $_discount)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->email = $_email;
        $this->isRegistered = $_isRegistered;
        $this->discount = $_discount;
    }

    public function getCustomerDetails()
    {
        return "ID: {$this->id}, Name: {$this->name}, Email: {$this->email}, Registered: {$this->isRegistered}, Discount: {$this->discount}%";
    }
}
