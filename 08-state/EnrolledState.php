<?php
require_once 'State.php';

class EnrolledState implements State
{
    public function enroll(Student $student): void
    {
        echo "Student is already enrolled." . PHP_EOL;
    }

    public function getName(): string { return "Enrolled"; }
}
