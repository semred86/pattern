<?php

use Patters\Behavioral\Strategy\Coding;
use Patters\Behavioral\Strategy\Developer;

require_once "../../vendor/autoload.php";

$dev = new Developer();

$dev->setAction(new Coding());
$dev->doIt();
$dev->changeAction();
$dev->doIt();
