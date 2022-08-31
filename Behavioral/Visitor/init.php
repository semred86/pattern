<?php

use Patters\Behavioral\Visitor\Bmw;
use Patters\Behavioral\Visitor\Tesla;
use Patters\Behavioral\Visitor\Visitor;

require_once "../../vendor/autoload.php";

$bmw  = new Bmw();
$tesla =  new Tesla();

$vis = new Visitor();

$bmw->info();
$bmw->export($vis);

$tesla->info();
$tesla->export($vis);
