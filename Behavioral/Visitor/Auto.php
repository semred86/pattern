<?php


namespace Patters\Behavioral\Visitor;


abstract class Auto
{
    abstract public function info();

    public function export(Visitor $visitor)
    {
        $visitor->export($this);
    }
}