<?php


namespace Patters\Creational\FactoryMethod;


class MacDialog extends Dialog
{

    protected function createButton(): Button
    {
        return new MacButton();
    }
}