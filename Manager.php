<?php

class Manager
{
    final function hirePersonnel()
    {
        echo "You have been hired!";
    }

    function attendMeeting()
    {
        echo "You have attended the meeting.";
    }
}

class Personnel extends Manager
{
    function attendMeeting()
    {
        echo "Not this again.";
    }

    // function is final in parent and cannot be overridden!
    function hirePersonnel()
    {
        echo "I want my friend to come work here too.";
    }
}
