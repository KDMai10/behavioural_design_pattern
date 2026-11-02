<?php
require_once 'Visitor.php';

// CHALLENGE: new operation, existing Student/Faculty/Alumni NOT modified.
class PDFReportVisitor implements Visitor
{
    public function visitStudent(Student $s): void { echo "PDF generated for Student {$s->getName()}." . PHP_EOL; }
    public function visitFaculty(Faculty $f): void { echo "PDF generated for Faculty {$f->getName()}." . PHP_EOL; }
    public function visitAlumni(Alumni $a): void   { echo "PDF generated for Alumni {$a->getName()}." . PHP_EOL; }
}
