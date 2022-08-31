<?php


namespace Patters\Behavioral\Mediator;


interface Chat
{
    public function sendMessage(string $message, User $user);
}