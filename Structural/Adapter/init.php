<?php


use Patters\Structural\Adapter\Adaptee;
use Patters\Structural\Adapter\Adapter;
use Patters\Structural\Adapter\Target;

require_once "../../vendor/autoload.php";

function Client(Target $target){
    $target->send();
}

Client(new Adapter(new Adaptee()));


