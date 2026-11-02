<?php
// ABSTRACT CLASS: generateReport() is the TEMPLATE METHOD.
// It fixes the order of the steps. 'final' stops subclasses from changing it.
abstract class Report
{
    final public function generateReport(): void
    {
        $this->generateHeader();
        $this->retrieveData();
        $this->formatData();
        $this->generateFooter();
    }

    // Steps that subclasses MUST fill in
    abstract protected function getTitle(): string;
    abstract protected function retrieveData(): void;
    abstract protected function formatData(): void;

    // Steps shared by ALL reports
    protected function generateHeader(): void
    {
        echo "========================" . PHP_EOL;
        echo $this->getTitle() . PHP_EOL;
        echo "========================" . PHP_EOL;
    }

    protected function generateFooter(): void
    {
        echo "========================" . PHP_EOL;
        echo "END OF REPORT" . PHP_EOL;
        echo "========================" . PHP_EOL . PHP_EOL;
    }
}
