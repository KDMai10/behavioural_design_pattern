<?php
require_once 'Observer.php';

class StudentPortal implements Observer
{
    public function update(float $grade): void
    {
        echo "Student Portal:" . PHP_EOL . "New grade posted." . PHP_EOL;
    }
}
