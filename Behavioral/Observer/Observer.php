<?php


namespace Patters\Behavioral\Observer;


interface Observer
{
    public function handleEvent(array $events);
}