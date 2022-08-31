<?php


namespace Patters\Creational\AbstractFactory;


class MacFactory implements GUIFactory
{

    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WinCheckbox();
    }
}