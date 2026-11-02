<?php
require_once 'Command.php';
require_once 'StudentSystem.php';

class LogoutCommand implements Command
{
    private StudentSystem $system;
    public function __construct(StudentSystem $system) { $this->system = $system; }

    public function execute(): void { $this->system->logout(); }
    public function undo(): void    { echo "Cannot undo logout." . PHP_EOL; }
    public function getName(): string { return "Logout"; }
}
