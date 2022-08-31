<?php

use Patters\Behavioral\Command\Driver;
use Patters\Behavioral\Command\Engine;
use Patters\Behavioral\Command\OffCommand;
use Patters\Behavioral\Command\OnCommand;

require_once "../../vendor/autoload.php";

$engine = new Engine();
$engineOn = new OnCommand($engine);
$engineOff = new OffCommand($engine);
$driver = new Driver($engineOn);
$driver->execute();
$driver->setCommand($engineOff);
$driver->execute();