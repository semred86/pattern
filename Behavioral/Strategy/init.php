<?php

use Patters\Behavioral\Strategy\Coding;
use Patters\Behavioral\Strategy\Developer;
use Patters\Behavioral\Strategy\Sleeping;

require_once "../../vendor/autoload.php";

$dev = new Developer();

$dev->setAction(new Coding());
$dev->doIt();
$dev->setAction(new Sleeping());
$dev->doIt();
