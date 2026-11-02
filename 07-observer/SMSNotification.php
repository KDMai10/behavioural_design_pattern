<?php
require_once 'Observer.php';

// CHALLENGE: a new observer - GradeSystem is NOT modified.
class SMSNotification implements Observer
{
    public function update(float $grade): void
    {
        echo "SMS Notification:" . PHP_EOL . "Your new grade is " . number_format($grade, 2) . "." . PHP_EOL;
    }
}
