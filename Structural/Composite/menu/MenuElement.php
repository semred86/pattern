<?php


namespace Patters\Structural\Composite\menu;


class MenuElement extends Menu
{
    public function render()
    {
        print "<li>";
        print "<a href='#'>" . $this->title . "</a>";
        if ($this->children->count()) {
            print "<ul>";
            foreach ($this->children as $child) {
                $child->render();
            }
            print "</ul>";
        }
        print "</li>";
    }
}