<?php


namespace Patters\Behavioral\Command;


use Patters\Behavioral\Command\Driver;

class OnCommand implements Command
{

    private Engine $engine;

    /**
     * OnCommand constructor.
     * @param Engine $engine
     */
    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function execute()
    {
        $this->engine->on();
    }
}