<?php
require_once 'Expression.php';

// Smallest rule:  FIELD = value
class TerminalExpression implements Expression
{
    private string $field;
    private $value;

    public function __construct(string $field, $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function interpret(StudentContext $context): bool
    {
        return $context->get($this->field) == $this->value;
    }
}
