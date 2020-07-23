<?php

class Boat
{
    function startSailing()
    {
        echo "Raising the sails and starting to sail.";
    }
}

class Motorboat extends Boat
{
    function startSailing()
    {
        echo "This is a motorboat, so no sails, so the engine starts instead.";
    }
}

$boat1 = new Boat;
$motorboat1 = new Motorboat;

$boat1->startSailing();
echo "<br>";
$motorboat1->startSailing();
