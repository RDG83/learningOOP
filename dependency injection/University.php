<?php

class University
{

    public $uniName;

    function __construct($name)
    {
        $this->uniName = $name;
    }
}

class Course extends University
{

    public $courseName;

    function __construct($name, University $u)
    {
        $this->courseName = $name;
        $this->uniName = $u->uniName;
    }
}

class Lesson extends Course
{

    public $lessonName;

    function __construct($name, Course $c, University $u)
    {
        $this->lessonName = $name;
        $this->courseName = $c->courseName;
        $this->uniName = $u->uniName;
    }
}

class student extends Lesson
{

    public $studentName;

    function __construct($name, Lesson $l, Course $c, University $u)
    {
        $this->studentName = $name;
        $this->lessonName = $l->lessonName;
        $this->courseName = $c->courseName;
        $this->uniName = $u->uniName;
    }
}

$university1 = new University("MIT");
$course1 = new Course("SC 101", $university1);
$lesson1 = new Lesson("data structures", $course1, $university1);
$student1 = new Student("John Doe", $lesson1, $course1, $university1);

var_dump($university1);
var_dump($course1);
var_dump($lesson1);
var_dump($student1);
