<?php
require_once 'GradeStrategy.php';

// CHALLENGE: a NEW strategy added WITHOUT touching GradeCalculator.
// Converts the average percentage into the 1.0 - 5.0 grading scale.
class TransmutedGradeStrategy implements GradeStrategy
{
    public function calculate(array $grades): float
    {
        $avg = array_sum($grades) / count($grades);

        if ($avg >= 97) return 1.00;
        if ($avg >= 94) return 1.25;
        if ($avg >= 91) return 1.50;
        if ($avg >= 88) return 1.75;
        if ($avg >= 85) return 2.00;
        if ($avg >= 82) return 2.25;
        if ($avg >= 79) return 2.50;
        if ($avg >= 76) return 2.75;
        if ($avg >= 75) return 3.00;
        return 5.00;
    }

    public function getName(): string
    {
        return "Transmuted Grade";
    }
}
