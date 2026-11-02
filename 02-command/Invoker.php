<?php
require_once 'Command.php';

// INVOKER: runs commands and remembers them so they can be undone.
class Invoker
{
    private array $history = [];

    public function run(Command $command): void
    {
        echo "Executing: " . $command->getName() . PHP_EOL;
        $command->execute();
        $this->history[] = $command;
    }

    public function undo(): void
    {
        $command = array_pop($this->history);
        if ($command === null) {
            echo "Nothing to undo." . PHP_EOL;
            return;
        }
        echo "Undoing: " . $command->getName() . PHP_EOL;
        $command->undo();
    }
}
