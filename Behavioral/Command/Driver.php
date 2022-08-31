<?php


namespace Patters\Behavioral\Command;

/*
 * Invoker
 */

class Driver
{
    private Command $command;

    /**
     * Driver constructor.
     * @param Command|null $command
     */
    public function __construct(Command $command = null)
    {
        if (isset($command)) {
            $this->command = $command;
        }
    }

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function execute()
    {
        $this->command->execute();
    }


}