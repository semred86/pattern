<?php

use Patters\Creational\AbstractFactory\Client;
use Patters\Creational\AbstractFactory\MacFactory;
use Patters\Creational\AbstractFactory\WinFactory;

require_once "vendor/autoload.php";


$winClient = new Client(new WinFactory());
$winClient->render();

$macClient = new Client(new MacFactory());
$macClient->render();
