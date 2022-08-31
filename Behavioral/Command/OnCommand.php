<?php


namespace Patters\Behavioral\Command;


class OnCommand implements Command
{

    private Engine $engin;

    /**
     * OnCommand constructor.
     * @param Engine $engin
     */
    public function __construct(Engine $engin)
    {
        $this->engin = $engin;
    }

    public function execute()
    {
        $this->engin->on();
    }
}