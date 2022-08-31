<?php


use Patters\Creational\FactoryMethod\MacDialog;
use Patters\Creational\FactoryMethod\WinDialog;

require_once "vendor/autoload.php";


$winD = new WinDialog();
$winD->render();

$macD = new MacDialog();
$macD->render();



