<?php


namespace Patters\Creational\Prototype;


class Company
{
    public string $name;

    /**
     * Company constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }


}