<?php

use Patters\Structural\Flyweight\CarFactory;

require_once "../../vendor/autoload.php";

function client(CarFactory $carFactory){
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("BMW");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
    $carFactory->add("Zhiguli");
}
client(new CarFactory());