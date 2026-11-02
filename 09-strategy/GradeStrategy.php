<?php
// STRATEGY INTERFACE: every grading algorithm must have calculate().
interface GradeStrategy
{
    public function calculate(array $grades): float;
    public function getName(): string;
}
