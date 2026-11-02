<?php
require_once 'GradeStrategy.php';

// CONTEXT: holds a strategy and delegates the work to it.
// It never knows WHICH strategy it is using.
class GradeCalculator
{
    private GradeStrategy $strategy;

    public function __construct(GradeStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(GradeStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function compute(array $grades): void
    {
        echo "Strategy: " . $this->strategy->getName() . PHP_EOL;
        echo "Result: " . number_format($this->strategy->calculate($grades), 2) . PHP_EOL . PHP_EOL;
    }
}
