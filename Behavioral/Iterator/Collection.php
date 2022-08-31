<?php


namespace Patters\Behavioral\Iterator;


interface Collection
{
    public function getIterator(): Iterator;
}