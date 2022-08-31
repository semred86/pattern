<?php

use Patters\Structural\Facade\A;
use Patters\Structural\Facade\Facade;

require_once "../../vendor/autoload.php";

function client(Facade $facade){
    $facade->sayAndGo();
    echo "\n";
    $facade->goAndSay();
}

$facade = new Facade(new A());
client($facade);
