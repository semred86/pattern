<?php

use Patters\Behavioral\Mediator\Admin;
use Patters\Behavioral\Mediator\SimpleChat;
use Patters\Behavioral\Mediator\SimpleUser;

require_once "../../vendor/autoload.php";

$chat = new SimpleChat();
$admin = new Admin($chat, "Admin");
$user1 = new SimpleUser($chat, "U1");
$user2 = new SimpleUser($chat, "U2");
$user3 = new SimpleUser($chat, "U3");

$chat->setAdmin($admin);
$chat->addUserToChat($user1);
$chat->addUserToChat($user2);
$chat->addUserToChat($user3);

$user1->sendMessage("I am U1");
$admin->sendMessage("I am admin");
