<?php


namespace Patters\Creational\AbstractFactory;


class MacCheckbox implements Checkbox
{

    public function render(): void
    {
        print "MAC CHE\n";
    }
}