<?php

use Patters\Behavioral\ChainOfResponsibility\DogHandler;
use Patters\Behavioral\ChainOfResponsibility\Handler;
use Patters\Behavioral\ChainOfResponsibility\MonkeyHandler;
use Patters\Behavioral\ChainOfResponsibility\SquirrelHandler;

require_once "../../vendor/autoload.php";

function clientCode(Handler $handler)
{
    foreach (["Nut", "Banana", "Cup of coffee"] as $food) {
        echo "Client: Who wants a " . $food . "?\n";
        $result = $handler->handle($food);
        if ($result) {
            echo "  " . $result;
        } else {
            echo "  " . $food . " was left untouched.\n";
        }
    }
}

/**
 * Другая часть клиентского кода создает саму цепочку.
 */
$monkey = new MonkeyHandler();
$squirrel = new SquirrelHandler();
$dog = new DogHandler();

$monkey->setNext($squirrel)->setNext($dog);

/**
 * Клиент должен иметь возможность отправлять запрос любому обработчику, а не
 * только первому в цепочке.
 */
echo "Chain: Monkey > Squirrel > Dog\n\n";
clientCode($monkey);
echo "\n";

echo "Subchain: Squirrel > Dog\n\n";
clientCode($squirrel);
