<?php

class Doctor
{

    function consult($hours)
    {
        return $hours * 25;
    }
}

class Specialist extends Doctor
{
    function consult($hours)
    {
        return $hours * 35;
    }
}

$doctor1 = new Doctor;
$specialist1 = new Specialist;

echo $doctor1->consult(3);
echo "<br>";
echo $specialist1->consult(3);
