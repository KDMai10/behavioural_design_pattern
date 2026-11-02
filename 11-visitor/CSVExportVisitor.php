<?php
require_once 'Visitor.php';

class CSVExportVisitor implements Visitor
{
    public function visitStudent(Student $s): void { echo "Student exported: {$s->getName()},{$s->getExtra()}" . PHP_EOL; }
    public function visitFaculty(Faculty $f): void { echo "Faculty exported: {$f->getName()},{$f->getExtra()}" . PHP_EOL; }
    public function visitAlumni(Alumni $a): void   { echo "Alumni exported: {$a->getName()},{$a->getExtra()}" . PHP_EOL; }
}
