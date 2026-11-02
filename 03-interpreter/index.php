<?php
require_once 'TerminalExpression.php';
require_once 'AndExpression.php';
require_once 'OrExpression.php';

echo "=== INTERPRETER PATTERN: Student Search/Query System ===" . PHP_EOL . PHP_EOL;

$student = new StudentContext(["PROGRAM" => "BSIT", "YEAR" => 4]);

function show(string $text, Expression $expr, StudentContext $ctx): void
{
    echo "Expression:" . PHP_EOL . $text . PHP_EOL;
    echo "Result: " . ($expr->interpret($ctx) ? "TRUE" : "FALSE") . PHP_EOL . PHP_EOL;
}

show('PROGRAM = "BSIT"', new TerminalExpression("PROGRAM", "BSIT"), $student);
show('YEAR = 4', new TerminalExpression("YEAR", 4), $student);

show('PROGRAM = "BSIT" AND YEAR = 4',
    new AndExpression(new TerminalExpression("PROGRAM", "BSIT"), new TerminalExpression("YEAR", 4)),
    $student);

// Challenge: OR
show('PROGRAM = "BSIT" OR PROGRAM = "BSCS"',
    new OrExpression(new TerminalExpression("PROGRAM", "BSIT"), new TerminalExpression("PROGRAM", "BSCS")),
    $student);
