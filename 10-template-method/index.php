<?php
require_once 'StudentReport.php';
require_once 'GradeReport.php';
require_once 'EnrollmentReport.php';

echo "=== TEMPLATE METHOD PATTERN: Student Report Generation ===" . PHP_EOL . PHP_EOL;

$reports = [new StudentReport(), new GradeReport(), new EnrollmentReport()];

foreach ($reports as $report) {
    $report->generateReport(); // same steps, different content
}
