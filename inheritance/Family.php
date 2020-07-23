<?php

require_once "./Father.php";
require_once "./Child.php";

$father1 = new Father("Anakin", 50);
$child1 = new Child("Luke", 25, $father1);

$child1->printFamily();
