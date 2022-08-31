<?php


namespace Patters\Creational\FactoryMethod;


class WinDialog extends Dialog
{

    protected function createButton(): Button
    {
        return new WinButton();
    }
}