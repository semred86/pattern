<?php


namespace Patters\Structural\Composite;


abstract class Component
{
    protected string $name;

    /**
     * Component constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function add(Component $component): void
    {
    }

    public function remove(Component $component): void
    {
    }

    public function display(): void
    {
        echo "$this->name";
    }
}