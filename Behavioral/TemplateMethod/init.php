<?php

use Patters\Behavioral\TemplateMethod\Blog;
use Patters\Behavioral\TemplateMethod\Home;

require_once "../../vendor/autoload.php";

$home = new Home();
$blog = new Blog();

$home->render();
$blog->render();