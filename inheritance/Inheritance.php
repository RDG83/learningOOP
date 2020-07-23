<?php

require_once "Company.php";
require_once "Employee.php";

$company1 = new Company("Apple", "California");
$company2 = new Company("Google", "California");

$employee1 = new Employee("John", 45, $company1);
$employee2 = new Employee("Jane", 35, $company2);


echo $employee1->printCompany();
echo $employee1->printemployee();
echo "<br>";
echo $employee2->printCompany();
echo $employee2->printemployee();

class Minion extends Employee
{
    function __construct(Employee $employee)
    {
        $this->employeeName = $employee->employeeName;
        $this->employeeAge = $employee->employeeAge;

        $this->companyName = $employee->companyName;
        $this->companyAddress = $employee->companyAddress;
    }
}

$minion1 = new Minion($employee1);

$minion1->printemployee();
$minion1->printCompany();
