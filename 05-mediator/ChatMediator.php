<?php
require_once 'Mediator.php';
require_once 'Student.php';

class ChatMediator implements Mediator
{
    private array $students = [];

    public function addStudent(Student $student): void { $this->students[] = $student; }

    public function sendMessage(string $message, Student $sender): void
    {
        foreach ($this->students as $student) {
            if ($student !== $sender) {
                $student->receive($message, $sender->getName());
            }
        }
    }
}
