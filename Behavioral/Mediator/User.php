<?php


namespace Patters\Behavioral\Mediator;


interface User
{
    public function sendMessage(string $message);

    public function getMessage(string $message);
}