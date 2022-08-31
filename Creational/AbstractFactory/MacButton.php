<?php


namespace Patters\Creational\AbstractFactory;


class MacButton implements Button
{

    public function render(): void
    {
        print "MAC BTN\n";
    }
}