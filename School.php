<?php

class School
{
    function hello()
    {
        echo "The school says hello <br>";
    }
}

class Teacher  extends School
{
    function hello()
    {
        echo "The teacher says hello <br>";
        parent::hello();
    }
}

$school1 = new School;
$teacher1 = new Teacher;

$school1->hello();
$teacher1->hello();
