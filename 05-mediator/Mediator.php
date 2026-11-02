<?php
interface Mediator
{
    public function sendMessage(string $message, Student $sender): void;
}
