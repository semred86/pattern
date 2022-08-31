<?php


namespace Patters\Structural\Decorator;


class TextPrinter implements Printer
{
    protected string $test;

    /**
     * TextPrinter constructor.
     * @param string $test
     */
    public function __construct(string $test)
    {
        $this->test = $test;
    }

    public function print(): string
    {
        return $this->test;
    }
}