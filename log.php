<?php

class Log{

    public $filelog;
    
    function __construct($path)
    {
        $this->filelog = fopen($path, "a");
    }

    function writeLine($type, $message)
    {
        $date = new DateTime();
        fputs($this->filelog, "[".$type."][".$date->format("d-m-Y H:i:s")."]:". $message . "\n");
    }

    function close()
    {
        fclose($this->filelog);
    }
}