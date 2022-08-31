<?php


namespace Patters\Behavioral\Command;

/*
 * Receiver
 */

class Engine
{
    public function on()
    {
        echo "ON\n";
    }

    public function off()
    {
        echo "OFF\n";
    }
}