<?php

require_once __DIR__ . '/Customer.php';

class Payment extends Customer
{

    public $creditCardNumber;
    public $expirationDate;

    public function __construct($_id, $_name, $_email, $_isRegistered, $_discount, $_creditCardNumber, $_expirationDate)
    {
        parent::__construct($_id, $_name, $_email, $_isRegistered, $_discount);
        $this->creditCardNumber = $_creditCardNumber;
        $this->expirationDate = DateTime::createFromFormat('m/Y', $_expirationDate);
    }

    public function checkCreditCard()
    {
        $currentDate = new DateTime();

        if ($currentDate < $this->expirationDate) {
            return true;
        } else {
            return false;
        }
    }

    public function processPayment($totalAmount)
    {
        if ($this->checkCreditCard()) {
            echo "Grazie per il tuo acquisto!";
        } else {
            echo "Mi spiace! Inserisci una carta di credito valida.";
        }
    }
}
