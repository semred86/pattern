<?php


namespace Patters\Creational\AbstractFactory;


class Client
{
    private Button $btn;
    private Checkbox $che;

    public function __construct(GUIFactory $factory)
    {
        $this->btn = $factory->createButton();
        $this->che = $factory->createCheckbox();
    }

    public function render()
    {
        $this->btn->render();
        $this->che->render();
    }
}