<?php


use Patters\Structural\Bridge\CPPLanguage;
use Patters\Structural\Bridge\FreelanceProgrammer;
use Patters\Structural\Bridge\Programmer;

require_once "../../vendor/autoload.php";

function client(Programmer $programmer){
    $programmer->doWork();
    $programmer->earnMoney();
}

$freelancer = new FreelanceProgrammer(new CPPLanguage());
client($freelancer);
