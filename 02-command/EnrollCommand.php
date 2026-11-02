<?php
require_once 'Command.php';
require_once 'StudentSystem.php';

class EnrollCommand implements Command
{
    private StudentSystem $system;
    public function __construct(StudentSystem $system) { $this->system = $system; }

    public function execute(): void { $this->system->enroll(); }
    public function undo(): void    { $this->system->unenroll(); }
    public function getName(): string { return "Enroll Student"; }
}
