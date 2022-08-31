<?php


namespace Patters\Structural\Decorator;


class H2Decorator extends PrinterDecorator
{
    public function print(): string
    {
        return "<h2>" . parent::print() . "</h2>";
    }
}