<?php
require_once 'SimpleAverageStrategy.php';
require_once 'WeightedAverageStrategy.php';
require_once 'TransmutedGradeStrategy.php';
require_once 'GradeCalculator.php';

echo "=== STRATEGY PATTERN: Grade Calculation System ===" . PHP_EOL . PHP_EOL;

// Midterm = 83, Final = 94
$grades = [83, 94];

$calculator = new GradeCalculator(new SimpleAverageStrategy());
$calculator->compute($grades);

// Switch strategy at runtime - GradeCalculator code is unchanged.
$calculator->setStrategy(new WeightedAverageStrategy([0.25, 0.75])); // Midterm 25%, Final 75%
$calculator->compute($grades);

// Challenge: brand-new strategy, no edits to GradeCalculator.
$calculator->setStrategy(new TransmutedGradeStrategy());
$calculator->compute($grades);
