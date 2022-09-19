<?php

use Patters\Structural\Composite\menu\MenuGetter;

require_once "../../../vendor/autoload.php";

$items = [
    3 => ['parent' => 1, 'name' => 'three'],
    1 => ['parent' => 2, 'name' => 'two'],
    2 => ['parent' => 0, 'name' => 'one'],
    4 => ['parent' => 1, 'name' => 'three'],
    5 => ['parent' => 0, 'name' => 'one']
];



$menu = MenuGetter::getMenu($items);
$menu->render();