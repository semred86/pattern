<?php


namespace Patters\Behavioral\TemplateMethod;


class Blog extends Template
{

    protected function body(): void
    {
        print "BLOG\n";
    }
}