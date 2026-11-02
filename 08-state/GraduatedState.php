<?php
require_once 'State.php';

class GraduatedState implements State
{
    public function enroll(Student $student): void
    {
        echo "Graduated students cannot enroll." . PHP_EOL;
    }

    public function getName(): string { return "Graduated"; }
}
