<?php

class Company
{
    public $companyName;
    public $companyAddress;

    function __construct($name, $address)
    {
        $this->companyName = $name;
        $this->companyAddress = $address;
    }

    function printCompany()
    {
        echo "Company name: $this->companyName <br>";
        echo "Company address: $this->companyAddress <br>";
    }
}
