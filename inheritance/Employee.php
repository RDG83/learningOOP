<?php

class Employee extends Company
{
    public $employeeName;
    public $employeeAge;

    function __construct($name, $age, Company $company)
    {
        $this->employeeName = $name;
        $this->employeeAge = $age;

        $this->companyName = $company->companyName;
        $this->companyAddress = $company->companyAddress;
    }

    function printemployee()
    {
        echo "Employee name: $this->employeeName <br>";
        echo "Employee age: $this->employeeAge <br>";
    }
}
