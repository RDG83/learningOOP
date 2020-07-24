<?php

spl_autoload_register(function ($classname) {
    require_once("$classname.php");
});

$helper = new Src\Helper;

$helper->sayHello();
