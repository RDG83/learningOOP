<?php

spl_autoload_register(function ($classname) {
    echo "Autoloader is loading this class: $classname" . "<br>";
    require_once("$classname.php");
});

$teacher1 = new Library\Teacher;
$teacher1->hello();

$student1 = new Library\Student;
$student1->hello();

$school1 = new School;
$school1->hello();
