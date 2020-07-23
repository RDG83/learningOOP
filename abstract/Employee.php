<?php

require_once "Company.php";

class Employee extends Company
{
    private $subject;

    function setSubject($subject)
    {
        $this->subject = $subject;
    }

    function getSubject()
    {
        return $this->subject;
    }
}

$employee1 = new Employee;

$employee1->setName("John");
echo $employee1->getName();
$employee1->setSubject("Martial Arts");
echo $employee1->getSubject();
