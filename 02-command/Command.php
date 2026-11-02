<?php
interface Command
{
    public function execute(): void;
    public function undo(): void;
    public function getName(): string;
}
