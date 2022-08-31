<?php


namespace Patters\Creational\FactoryMethod;


class MacButton implements Button
{

    public function render(): void
    {
        print "Mac BTN\n";
    }
}