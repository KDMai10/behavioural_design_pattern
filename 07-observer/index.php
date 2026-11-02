<?php
require_once 'GradeSystem.php';
require_once 'StudentPortal.php';
require_once 'EmailNotification.php';
require_once 'ParentNotification.php';
require_once 'SMSNotification.php';

echo "=== OBSERVER PATTERN: Grade Notification System ===" . PHP_EOL . PHP_EOL;

$gradeSystem = new GradeSystem();
$gradeSystem->attach(new StudentPortal());
$gradeSystem->attach(new EmailNotification());
$gradeSystem->attach(new ParentNotification());

$gradeSystem->setGrade(1.75);

echo PHP_EOL . "--- Challenge: adding a new observer (SMS) ---" . PHP_EOL;
$gradeSystem->attach(new SMSNotification());
$gradeSystem->setGrade(1.50);
