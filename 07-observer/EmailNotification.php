<?php
require_once 'Observer.php';

class EmailNotification implements Observer
{
    public function update(float $grade): void
    {
        echo "Email Notification:" . PHP_EOL . "Your grade has been updated." . PHP_EOL;
    }
}
