<?php

class Vowelcounter
{

    static function count($string)
    {
        $counter = 0;
        $spliced = str_split(strtolower($string));
        foreach ($spliced as $i) {
            if ($i === "a" || $i === "e" || $i === "u" || $i === "i" || $i === "o") {
                $counter = $counter + 1;
            }
        }
        return $counter;
    }
}

$string = "A great story about a dragon and a princess";

echo Vowelcounter::count($string);
