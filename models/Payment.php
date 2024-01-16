<?php

class Payment
{

    public $creditCardNumber;
    public $expirationDate;

    public function __construct($_creditCardNumber, $_expirationDate)
    {
        $this->creditCardNumber = $_creditCardNumber;
        $this->expirationDate = $_expirationDate;
    }

    public function checkCreditCard()
    {
        $currentDate = new DateTime();
        $expirationDate = DateTime::createFromFormat('m/Y', $this->expirationDate);

        if ($currentDate < $expirationDate) {
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
