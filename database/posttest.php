<?php

require_once "Database.php";

$db = new Database();

echo $db->isConnected() ? "Connected" : "Not connected";

// INSERT

// $db->query("INSERT INTO `posts`(`title`, `content`) VALUES ('post two', 'this is the second post')");
// $db->execute();

// SHOW ALL

// $db->query("SELECT * FROM `posts`");
// var_dump($db->resultset());

// SHOW ONE

// $db->query("SELECT * FROM `posts` WHERE id=1");
// var_dump($db->resultset());

// UPDATE

// $db->query("UPDATE `posts` SET `content`='some random replacement text' WHERE id=2 ");
// $db->execute();
// $db->query("SELECT * FROM `posts` WHERE id=2");
// var_dump($db->resultset());

// DELETE

// $db->query("DELETE FROM `posts` WHERE id=1");
// $db->execute();
// $db->query("SELECT * FROM `posts`");
// var_dump($db->resultset());
