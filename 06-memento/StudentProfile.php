<?php
require_once 'StudentProfileMemento.php';

// ORIGINATOR: creates snapshots of itself and restores from them.
class StudentProfile
{
    public function __construct(
        private string $name, private string $program,
        private int $year, private string $email
    ) {}

    public function setProgram(string $program): void { $this->program = $program; }
    public function setYear(int $year): void { $this->year = $year; }

    public function save(): StudentProfileMemento
    {
        return new StudentProfileMemento($this->name, $this->program, $this->year, $this->email);
    }

    public function restore(StudentProfileMemento $m): void
    {
        $this->name = $m->getName();
        $this->program = $m->getProgram();
        $this->year = $m->getYear();
        $this->email = $m->getEmail();
    }

    public function display(): void
    {
        echo "Name: {$this->name}" . PHP_EOL;
        echo "Program: {$this->program}" . PHP_EOL;
        echo "Year: {$this->year}" . PHP_EOL;
        echo "Email: {$this->email}" . PHP_EOL;
    }
}
