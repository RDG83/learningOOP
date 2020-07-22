<?php
class File
{
    function displayFile($fileName)
    {
        try {
            $content = file_get_contents($fileName);
            return $content;
        } catch (Exception $e) {
            echo "Something went wrong" . $e->getMessage();
        }
    }
}

$file1 = new File;

echo $file1->displayFile("test.txt");
