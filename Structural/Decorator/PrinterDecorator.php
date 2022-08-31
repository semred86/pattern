<?php


namespace Patters\Structural\Decorator;


abstract class PrinterDecorator implements Printer
{
    public Printer $printer;

    /**
     * PrinterDecorator constructor.
     * @param Printer $printer
     */
    public function __construct(Printer $printer)
    {
        $this->printer = $printer;
    }

    public function print(): string
    {
        return $this->printer->print();
    }
}