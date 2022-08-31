<?php


namespace Patters\Structural\Adapter;


class Adapter implements Target
{
    private Adaptee $adaptee;

    /**
     * Adapter constructor.
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function send()
    {
        $this->adaptee->specialSend();
    }
}