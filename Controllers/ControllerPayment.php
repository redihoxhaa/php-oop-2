<?php

require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . '/../Models/Payment.php';

$payments = [];

foreach ($payments_db as $payment) {
    array_push($payments, new Payment($payment['id'], $payment['name'], $payment['email'], $payment['isRegistered'], $payment['discount'], $payment['creditCardNumber'], $payment['expirationDate']));
}
