<?php


namespace Patters\Behavioral\Iterator;


interface Iterator
{
    public function hasNext(): bool;

    public function next();
}