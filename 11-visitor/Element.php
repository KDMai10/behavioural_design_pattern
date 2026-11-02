<?php
require_once 'Visitor.php';

interface Element
{
    public function accept(Visitor $visitor): void;
    public function getName(): string;
}
