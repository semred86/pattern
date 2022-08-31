<?php

use Patters\Structural\Proxy\Proxy;
use Patters\Structural\Proxy\RealSubject;
use Patters\Structural\Proxy\Subject;

require_once "../../vendor/autoload.php";

function client(Subject $subject){
    $subject->request();
}

$realSubject = new RealSubject();
client($realSubject);
client(new Proxy($realSubject));