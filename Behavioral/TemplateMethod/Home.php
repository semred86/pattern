<?php


namespace Patters\Behavioral\TemplateMethod;


class Home extends Template
{

    protected function body(): void
    {
        print "HOME\n";
    }
}