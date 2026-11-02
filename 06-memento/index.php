<?php
require_once 'StudentProfile.php';
require_once 'ProfileHistory.php';

echo "=== MEMENTO PATTERN: Student Profile Undo System ===" . PHP_EOL . PHP_EOL;

$profile = new StudentProfile("Juan Dela Cruz", "BSIT", 3, "juan@school.edu");
$history = new ProfileHistory();

echo "Original Profile:" . PHP_EOL;
$profile->display();

$history->push($profile->save());   // save BEFORE changing
$profile->setProgram("BSCS");
$profile->setYear(4);

echo PHP_EOL . "Current Profile:" . PHP_EOL;
$profile->display();

echo PHP_EOL . "Undo..." . PHP_EOL;
$profile->restore($history->pop());

echo PHP_EOL . "Restored Profile:" . PHP_EOL;
$profile->display();
