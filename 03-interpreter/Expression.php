<?php
require_once 'StudentContext.php';

interface Expression
{
    public function interpret(StudentContext $context): bool;
}
