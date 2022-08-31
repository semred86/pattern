<?php


namespace Patters\Structural\Proxy;


class RealSubject implements Subject
{

    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}