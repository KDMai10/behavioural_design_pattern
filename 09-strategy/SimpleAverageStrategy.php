<?php
require_once 'GradeStrategy.php';

// CONCRETE STRATEGY #1: sum of grades divided by how many there are.
class SimpleAverageStrategy implements GradeStrategy
{
    public function calculate(array $grades): float
    {
        return array_sum($grades) / count($grades);
    }

    public function getName(): string
    {
        return "Simple Average";
    }
}
