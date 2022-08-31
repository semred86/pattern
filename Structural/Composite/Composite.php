<?php


namespace Patters\Structural\Composite;


use SplObjectStorage;

class Composite extends Component
{

    /**
     * @var SplObjectStorage
     */
    protected SplObjectStorage $children;

    /**
     * Composite constructor.
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->children = new SplObjectStorage();
    }


    public function add(Component $component): void
    {
        $this->children->attach($component);
    }

    public function remove(Component $component): void
    {
        $this->children->detach($component);
    }

    public function display(): void
    {
        parent::display();
        echo "\\";
        foreach ($this->children as $child) {
            $child->display();
        }
    }
}