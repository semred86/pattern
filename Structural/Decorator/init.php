<?php

use Patters\Structural\Decorator\H2Decorator;
use Patters\Structural\Decorator\Printer;
use Patters\Structural\Decorator\TextPrinter;

require_once "../../vendor/autoload.php";

function client(Printer $printer){
    echo $printer->print();
}

$title = new TextPrinter("Title");
client($title);
echo "\n";
client(new H2Decorator($title));
