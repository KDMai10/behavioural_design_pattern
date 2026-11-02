<?php
require_once 'ChatMediator.php';

echo "=== MEDIATOR PATTERN: Student Communication System ===" . PHP_EOL . PHP_EOL;

$chat = new ChatMediator();
$juan  = new Student("Juan", $chat);
$maria = new Student("Maria", $chat);
$pedro = new Student("Pedro", $chat);

$chat->addStudent($juan);
$chat->addStudent($maria);
$chat->addStudent($pedro);

$juan->send("Hello everyone!");
