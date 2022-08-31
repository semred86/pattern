<?php

use Patters\Creational\Prototype\Company;
use Patters\Creational\Prototype\Employee;

require_once "../../vendor/autoload.php";

$google = new Company("Google");
$bob = new Employee("Bob", $google);

$john = clone $bob;
$john->name = "John";
$john->company->name = "Microsoft";


print $bob->name;
print "\n";
print $bob->company->name;
print "\n";
print "========\n";
print $john->name;
print "\n";
print $john->company->name;
