<?php
require_once 'StudentAffairsHandler.php';
require_once 'RegistrarHandler.php';
require_once 'FinanceHandler.php';
require_once 'ICTHandler.php';

echo "=== CHAIN OF RESPONSIBILITY: Student Request Processing ===" . PHP_EOL . PHP_EOL;

$studentAffairs = new StudentAffairsHandler();
$studentAffairs->setNext(new RegistrarHandler())
               ->setNext(new FinanceHandler())
               ->setNext(new ICTHandler());

foreach (["Transcript of Records", "Good Moral Certificate", "Certificate of Enrollment", "Student ID Concern"] as $type) {
    echo "Request: $type" . PHP_EOL;
    $studentAffairs->handle(new StudentRequest($type));
    echo PHP_EOL;
}
