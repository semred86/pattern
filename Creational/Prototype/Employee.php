<?php


namespace Patters\Creational\Prototype;


class Employee
{
    public string $name;
    public Company $company;

    /**
     * Employee constructor.
     * @param string $name
     * @param Company $company
     */
    public function __construct(string $name, Company $company)
    {
        $this->name = $name;
        $this->company = $company;
    }

    public function __clone()
    {
        $this->company = clone $this->company;
    }
}