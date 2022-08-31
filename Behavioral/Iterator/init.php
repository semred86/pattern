<?php

use Patters\Behavioral\Iterator\PhpDeveloper;

require_once "../../vendor/autoload.php";

$skills = ["PHP", "SQL", "HTML", "CSS", "JAVASCRIPT"];
$developer = new PhpDeveloper("Seraph", $skills);
$iterator = $developer->getIterator();

while ($iterator->hasNext()){
    echo "{$developer->getName()} know {$iterator->next()}\n";
}

