<?php
require_once 'Visitor.php';

class ReportVisitor implements Visitor
{
    public function visitStudent(Student $s): void { echo "Report: Student {$s->getName()}, Year {$s->getExtra()}" . PHP_EOL; }
    public function visitFaculty(Faculty $f): void { echo "Report: Faculty {$f->getName()}, {$f->getExtra()} years of service" . PHP_EOL; }
    public function visitAlumni(Alumni $a): void   { echo "Report: Alumni {$a->getName()}, Batch {$a->getExtra()}" . PHP_EOL; }
}
