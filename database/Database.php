<?php

require_once "config/config.php";

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASSWORD;
    private $dbname = DB_NAME;

    private $connection;
    private $error;
    private $stmt;
    private $dbconnected = false;

    public function __construct()
    {
    }

    public function getError()
    {
    }

    public function isConnected()
    {
        return $this->dbconnected;
    }

    public function query($query)
    {
        $this->stmt = $this->connection->prepare($query);
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function resultset()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
