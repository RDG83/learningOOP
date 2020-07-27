<?php

require_once "Database.php";

$db = new Database();

echo $db->isConnected() ? "Connection succesful" : "Failed to connect";


// $db->query("INSERT INTO `test`(`name`) VALUES ('This is the third enry')");
// $db->execute();

// $db->query("SELECT * FROM `test`");
// var_dump($db->resultset());

// $db->query("DELETE FROM `test` WHERE name='This is the third enry'");
// $db->execute();

// $db->query("SELECT * FROM `test`");
// var_dump($db->resultset());

$db->query("SELECT * FROM `test` WHERE id = :id");
$db->bind(":id", 1);
var_dump($db->single());
