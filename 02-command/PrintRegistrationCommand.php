<?php
require_once 'Command.php';
require_once 'StudentSystem.php';

class PrintRegistrationCommand implements Command
{
    private StudentSystem $system;
    public function __construct(StudentSystem $system) { $this->system = $system; }

    public function execute(): void { $this->system->printRegistration(); }
    public function undo(): void    { echo "Nothing to undo for printing." . PHP_EOL; }
    public function getName(): string { return "Print Registration"; }
}
