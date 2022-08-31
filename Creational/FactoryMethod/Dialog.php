<?php


namespace Patters\Creational\FactoryMethod;


abstract class Dialog
{
    public function render()
    {
        $button = $this->createButton();
        $button->render();
    }

    abstract protected function createButton(): Button;
}