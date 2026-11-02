<?php
require_once 'State.php';

class ApplicantState implements State
{
    public function enroll(Student $student): void
    {
        echo "Student must complete pre-assessment first." . PHP_EOL;
    }

    public function getName(): string { return "Applicant"; }
}
