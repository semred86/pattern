<?php

use Patters\Behavioral\Observer\Subscriber;
use Patters\Behavioral\Observer\Vacancies;

require_once "../../vendor/autoload.php";

$jobs = new Vacancies();

$u1 = new Subscriber('u1');
$u2 = new Subscriber('u2');
$u3 = new Subscriber('u3');

$jobs->addObserver($u1);
$jobs->addObserver($u2);
$jobs->addObserver($u3);

$jobs->addVacancy('Уборщица');
$jobs->addVacancy('Повор');
$jobs->removeVacancy('Уборщица');
