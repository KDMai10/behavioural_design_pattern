<?php
require_once 'Report.php';

class EnrollmentReport extends Report
{
    private array $data = [];

    protected function getTitle(): string { return "ENROLLMENT REPORT"; }

    protected function retrieveData(): void
    {
        $this->data = ["term" => "1st Semester 2026-2027", "status" => "Enrolled", "units" => 21];
    }

    protected function formatData(): void
    {
        echo "Term: " . $this->data['term'] . PHP_EOL;
        echo "Status: " . $this->data['status'] . PHP_EOL;
        echo "Total Units: " . $this->data['units'] . PHP_EOL;
    }
}
