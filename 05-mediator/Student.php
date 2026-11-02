<?php
require_once 'Mediator.php';

// COLLEAGUE: knows only the mediator, never other students.
class Student
{
    public function __construct(private string $name, private Mediator $mediator) {}

    public function getName(): string { return $this->name; }

    public function send(string $message): void
    {
        echo $this->name . ": " . $message . PHP_EOL;
        $this->mediator->sendMessage($message, $this);
    }

    public function receive(string $message, string $from): void
    {
        echo $this->name . " receives:" . PHP_EOL . $from . ": " . $message . PHP_EOL;
    }
}
