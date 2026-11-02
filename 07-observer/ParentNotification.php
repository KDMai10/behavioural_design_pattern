<?php
require_once 'Observer.php';

class ParentNotification implements Observer
{
    public function update(float $grade): void
    {
        echo "Parent Notification:" . PHP_EOL . "Student grade has been posted." . PHP_EOL;
    }
}
