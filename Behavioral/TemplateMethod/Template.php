<?php


namespace Patters\Behavioral\TemplateMethod;


abstract class Template
{
    public function render()
    {
        print "HEAD\n";
        $this->body();
        print "FOOT\n";
    }

    abstract protected function body(): void;
}