<?php


namespace Patters\Behavioral\ChainOfResponsibility;


interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(string $request): ?string;
}