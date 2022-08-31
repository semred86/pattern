<?php

use Patters\Behavioral\Memento\BookMark;
use Patters\Behavioral\Memento\BookReader;

require_once "../../vendor/autoload.php";

$bookReader = new BookReader("102");
$bookMark = new BookMark($bookReader);

echo $bookReader->getPage();
$bookReader->setPage("201");
echo $bookReader->getPage();
$bookMark->getPage($bookReader);
echo $bookReader->getPage();
