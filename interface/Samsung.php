<?php

require_once "Phone.php";

class Samsung implements Phone
{

    public function makeCall($number)
    {
        echo "Making a call to number: $number. <br>";
    }

    public function sendMessage($number, $message)
    {
        echo "Sending this message: '$message' to number: $number <br>";
    }
}

$samsung1 = new Samsung();

$samsung1->makeCall(12345);
$samsung1->sendMessage(12345, "Hi, there was an unexpected server crash and i'll be working late, sorry babe.");
