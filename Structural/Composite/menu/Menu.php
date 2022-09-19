<?php

namespace Patters\Structural\Composite\menu;

use SplObjectStorage;

class Menu extends AbstractElement
{
    protected SplObjectStorage $children;

    /**
     * Menu constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        parent::__construct($title);
        $this->children = new SplObjectStorage();
    }

    /**
     * @param AbstractElement $el
     */
    public function add(AbstractElement $el)
    {
        $this->children->attach($el);
    }

    public function render()
    {
        print "<div class=\"menu-wrap\">";
        print "<ul class=\"" . $this->title . "\">";
        foreach ($this->children as $child) {
            $child->render();
        }
        print "</ul></div>";
    }
}