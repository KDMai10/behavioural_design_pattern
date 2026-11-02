<?php
require_once 'EnrollCommand.php';
require_once 'DropSubjectCommand.php';
require_once 'PrintRegistrationCommand.php';
require_once 'LogoutCommand.php';
require_once 'Invoker.php';

echo "=== COMMAND PATTERN: Student System Actions ===" . PHP_EOL . PHP_EOL;

$system = new StudentSystem();
$invoker = new Invoker();

$invoker->run(new EnrollCommand($system));
$invoker->run(new DropSubjectCommand($system));

echo PHP_EOL . "--- Undo challenge ---" . PHP_EOL;
$invoker->undo(); // undoes Drop Subject
$invoker->undo(); // undoes Enroll Student
$invoker->undo(); // nothing left

echo PHP_EOL . "--- Other commands ---" . PHP_EOL;
$invoker->run(new PrintRegistrationCommand($system));
$invoker->run(new LogoutCommand($system));
