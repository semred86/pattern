<?php


namespace Patters\Structural\Flyweight;


class CarFactory
{
    private array $cars = [];

    public function add(string $carModel)
    {
        if (!isset($this->cars[$carModel])) {
            $carClass = "Patters\Structural\Flyweight\\" . $carModel;
            $this->cars[$carModel] = new $carClass;

            echo "create $carModel\n";
        }

        $this->cars[$carModel]->ride();
    }
}