<?php

abstract class Database
{
    abstract function getConnection();
    abstract function connectionActive();
}

class DBConnect extends Database
{
    function getConnection()
    {
        echo "Connecting to the database. <br>";
    }

    function connectionActive()
    {
        echo "The database is now connected. <br>";
    }
}

$connection1 = new DBConnect;

$connection1->getConnection();
$connection1->connectionActive();

// $database1 = new Database; // breaks the code, cannot instantiate an abstract class
