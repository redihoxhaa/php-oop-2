<?php

require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . '/../Models/Customer.php';

$customers = [];

foreach ($customers_db as $customer) {
    array_push($customers, new Customer($customer['id'], $customer['name'], $customer['email'], $customer['isRegistered'], $customer['discount']));
}
