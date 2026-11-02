<?php
require_once 'Report.php';

class StudentReport extends Report
{
    private array $data = [];

    protected function getTitle(): string { return "STUDENT REPORT"; }

    protected function retrieveData(): void
    {
        $this->data = ["id" => "2026-001", "name" => "Juan Dela Cruz", "program" => "BSIT"];
    }

    protected function formatData(): void
    {
        echo "Student ID: " . $this->data['id'] . PHP_EOL;
        echo "Name: " . $this->data['name'] . PHP_EOL;
        echo "Program: " . $this->data['program'] . PHP_EOL;
    }
}
