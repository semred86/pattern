<?php

use Patters\Structural\Composite\Component;
use Patters\Structural\Composite\Composite;
use Patters\Structural\Composite\Leaf;

require_once "../../vendor/autoload.php";

function client(Component $component)
{
    $component->display();
}

$discC = new Composite("C:");
$docs = new Composite("Documents");
$txtFile = new Leaf("hello.txt");

$discC->add($docs);
$docs->add($txtFile);

client($discC);