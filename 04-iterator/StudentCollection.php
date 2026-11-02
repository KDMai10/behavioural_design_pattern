<?php
require_once 'Student.php';
require_once 'StudentIterator.php';

// AGGREGATE: the array is PRIVATE. The only way out is through an iterator.
class StudentCollection implements IteratorAggregate
{
    private array $students = [];

    public function add(Student $student): void
    {
        $this->students[] = $student;
    }

    public function getIterator(): Iterator
    {
        return new StudentIterator($this->students);
    }
}
