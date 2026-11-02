<?php
require_once 'Student.php';
require_once 'Faculty.php';
require_once 'Alumni.php';
require_once 'CSVExportVisitor.php';
require_once 'ReportVisitor.php';
require_once 'StatisticsVisitor.php';
require_once 'PDFReportVisitor.php';

echo "=== VISITOR PATTERN: Student Record Operations ===" . PHP_EOL . PHP_EOL;

$records = [new Student("Juan", 3), new Faculty("Dr. Santos", 12), new Alumni("Maria", 2020)];

function run(string $title, Visitor $visitor, array $records): void
{
    echo $title . PHP_EOL;
    foreach ($records as $record) {
        $record->accept($visitor);
    }
    echo PHP_EOL;
}

run("CSV Export Visitor", new CSVExportVisitor(), $records);
run("Report Visitor", new ReportVisitor(), $records);

echo "Statistics Visitor" . PHP_EOL;
$stats = new StatisticsVisitor();
foreach ($records as $r) { $r->accept($stats); }
$stats->printResult();

echo PHP_EOL;
run("PDF Report Visitor (challenge)", new PDFReportVisitor(), $records);
