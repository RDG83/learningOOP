<?php

class Bank
{

    private $balance;

    function __construct($balance)
    {
        $this->balance = $balance;
    }

    function getBalance()
    {
        return $this->balance;
    }

    function depositAmount($amt)
    {
        $this->balance = $this->balance + $amt;
    }

    function deductAmount($amt)
    {
        $this->balance = $this->balance - $amt;
    }
}

$bank1 = new Bank(100);

echo $bank1->getBalance() . "<br>";

$bank1->deductAmount(20);

echo $bank1->getBalance() . "<br>";

$bank1->depositAmount(40);

echo $bank1->getBalance() . "<br>";
