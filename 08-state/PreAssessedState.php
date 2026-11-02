<?php
require_once 'State.php';

class PreAssessedState implements State
{
    public function enroll(Student $student): void
    {
        echo "Student successfully enrolled." . PHP_EOL;
        $student->setState(new EnrolledState());
    }

    public function getName(): string { return "Pre-Assessed"; }
}
