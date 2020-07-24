<?php

class University
{

    public $UniName;

    function __construct($name)
    {
        $this->UniName = $name;
    }
}

class Course extends University
{

    public $courseName;

    function __construct($name, University $u)
    {
        $this->courseName = $name;
        $this->UniName = $u->UniName;
    }
}

class Lesson extends Course
{

    public $name;

    function __construct($name, Course $c, University $u)
    {
        $this->name = $name;
        $this->courseName = $c->courseName;
        $this->UniName = $u->UniName;
    }
}

$university1 = new University("MIT");
$course1 = new Course("SC 101", $university1);
$lesson1 = new Lesson("data structures", $course1, $university1);

var_dump($university1);
var_dump($course1);
var_dump($lesson1);
