<?php
require_once 'GradeStrategy.php';

// CONCRETE STRATEGY #2: each grade has a weight (weights add up to 1.0).
class WeightedAverageStrategy implements GradeStrategy
{
    private array $weights;

    public function __construct(array $weights)
    {
        $this->weights = $weights;
    }

    public function calculate(array $grades): float
    {
        $total = 0;
        foreach ($grades as $i => $grade) {
            $total += $grade * $this->weights[$i];
        }
        return $total;
    }

    public function getName(): string
    {
        return "Weighted Average";
    }
}
