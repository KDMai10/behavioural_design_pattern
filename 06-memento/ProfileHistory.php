<?php
require_once 'StudentProfileMemento.php';

// CARETAKER: keeps the snapshots but never looks inside them.
class ProfileHistory
{
    private array $mementos = [];

    public function push(StudentProfileMemento $m): void { $this->mementos[] = $m; }
    public function pop(): ?StudentProfileMemento { return array_pop($this->mementos); }
}
