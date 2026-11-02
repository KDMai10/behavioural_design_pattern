<?php
require_once 'State.php';
require_once 'ApplicantState.php';
require_once 'PreAssessedState.php';
require_once 'EnrolledState.php';
require_once 'DroppedState.php';
require_once 'GraduatedState.php';

// CONTEXT: delegates behavior to whatever state it currently holds.
class Student
{
    private State $state;

    public function __construct()
    {
        $this->state = new ApplicantState();
    }

    public function setState(State $state): void { $this->state = $state; }

    public function enroll(): void
    {
        echo "Current State: " . $this->state->getName() . PHP_EOL;
        echo "Action: Enroll" . PHP_EOL . "Result:" . PHP_EOL;
        $this->state->enroll($this);
        echo PHP_EOL;
    }
}
