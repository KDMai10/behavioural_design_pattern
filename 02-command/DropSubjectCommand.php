<?php
require_once 'Command.php';
require_once 'StudentSystem.php';

class DropSubjectCommand implements Command
{
    private StudentSystem $system;
    public function __construct(StudentSystem $system) { $this->system = $system; }

    public function execute(): void { $this->system->dropSubject(); }
    public function undo(): void    { $this->system->restoreSubject(); }
    public function getName(): string { return "Drop Subject"; }
}
