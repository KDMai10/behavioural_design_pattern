<?php
require_once 'Observer.php';

// SUBJECT INTERFACE: can add, remove, and notify observers.
interface Subject
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
}
