<?php
// MEMENTO: a read-only snapshot of the profile.
class StudentProfileMemento
{
    public function __construct(
        private string $name, private string $program,
        private int $year, private string $email
    ) {}

    public function getName(): string { return $this->name; }
    public function getProgram(): string { return $this->program; }
    public function getYear(): int { return $this->year; }
    public function getEmail(): string { return $this->email; }
}
