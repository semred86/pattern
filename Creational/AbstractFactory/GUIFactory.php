<?php


namespace Patters\Creational\AbstractFactory;


interface GUIFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}
