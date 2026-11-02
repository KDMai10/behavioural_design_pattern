<?php
require_once 'Report.php';

class GradeReport extends Report
{
    private array $grades = [];

    protected function getTitle(): string { return "GRADE REPORT"; }

    protected function retrieveData(): void
    {
        $this->grades = ["Programming 2" => 1.50, "Database" => 1.75, "Networking" => 2.00];
    }

    protected function formatData(): void
    {
        foreach ($this->grades as $subject => $grade) {
            echo $subject . ": " . number_format($grade, 2) . PHP_EOL;
        }
    }
}
