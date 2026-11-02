<?php
require_once 'Visitor.php';

class StatisticsVisitor implements Visitor
{
    private int $students = 0, $faculty = 0, $alumni = 0;

    public function visitStudent(Student $s): void { $this->students++; }
    public function visitFaculty(Faculty $f): void { $this->faculty++; }
    public function visitAlumni(Alumni $a): void   { $this->alumni++; }

    public function printResult(): void
    {
        echo "Students: {$this->students}, Faculty: {$this->faculty}, Alumni: {$this->alumni}" . PHP_EOL;
    }
}
