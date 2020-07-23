<?php
class File
{

    public $file;
    public $handle;

    function __construct($file)
    {

        if (file_exists($file)) {
            $this->handle = fopen($file, "r");
            $this->file = $file;
        } else {
            echo "File not found, enter a valid file name.";
        }
    }

    function getContent()
    {
        echo file_get_contents($this->file);
    }

    function __destruct()
    {
        if (isset($this->handle)) {
            fclose($this->handle);
            echo "File closed";
        }
    }
}

$file = new File("test.txt");

$file->getContent();
