<?php
// CONCRETE ITERATOR: remembers the current position and walks through the list.
class StudentIterator implements Iterator
{
    private array $students;
    private int $position = 0;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function current(): mixed { return $this->students[$this->position]; }
    public function key(): mixed     { return $this->position; }
    public function next(): void     { $this->position++; }
    public function rewind(): void   { $this->position = 0; }
    public function valid(): bool    { return isset($this->students[$this->position]); }
}
