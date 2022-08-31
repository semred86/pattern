<?php


namespace Patters\Behavioral\Visitor;


class Visitor
{
    public function export(Auto $auto)
    {
        if ($auto instanceof Tesla) print "Export T\n\n";
        if ($auto instanceof Bmw) print "Export B\n\n";
    }
}