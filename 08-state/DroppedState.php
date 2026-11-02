<?php
require_once 'State.php';

class DroppedState implements State
{
    public function enroll(Student $student): void
    {
        echo "Dropped students must re-apply before enrolling." . PHP_EOL;
    }

    public function getName(): string { return "Dropped"; }
}
