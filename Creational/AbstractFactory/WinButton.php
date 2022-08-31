<?php


namespace Patters\Creational\AbstractFactory;


class WinButton implements Button
{

    public function render(): void
    {
        print "WIN BTN\n";
    }
}