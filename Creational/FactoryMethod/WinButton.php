<?php


namespace Patters\Creational\FactoryMethod;


class WinButton implements Button
{

    public function render(): void
    {
        print "Win BTN\n";
    }
}