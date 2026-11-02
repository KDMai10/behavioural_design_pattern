<?php
require_once 'Student.php';

echo "=== STATE PATTERN: Student Enrollment Status ===" . PHP_EOL . PHP_EOL;

$student = new Student();
$student->enroll();                       // Applicant

$student->setState(new PreAssessedState());
$student->enroll();                       // Pre-Assessed -> becomes Enrolled

$student->enroll();                       // Enrolled

$student->setState(new DroppedState());
$student->enroll();                       // Dropped

$student->setState(new GraduatedState());
$student->enroll();                       // Graduated
