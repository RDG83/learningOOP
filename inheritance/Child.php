<?php

class Child extends Father
{
    public $name;
    public $age;

    function __construct($name, $age, Father $father)
    {
        $this->name = $name;
        $this->age = $age;

        $this->fatherName = $father->fatherName;
        $this->fatherAge = $father->fatherAge;
    }

    function printFamily()
    {
        echo "$this->name is $this->age years old and is the child of $this->fatherName who is $this->fatherAge years old";
    }
}
