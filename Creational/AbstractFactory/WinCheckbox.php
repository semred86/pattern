<?php


namespace Patters\Creational\AbstractFactory;


class WinCheckbox implements Checkbox
{

    public function render(): void
    {
        print "WIN CHE\n";
    }
}