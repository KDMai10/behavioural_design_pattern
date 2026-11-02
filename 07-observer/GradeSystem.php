<?php
require_once 'Subject.php';

// CONCRETE SUBJECT: when the grade changes, everyone on the list is notified.
class GradeSystem implements Subject
{
    private array $observers = [];
    private float $grade = 0;

    public function attach(Observer $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter(
            $this->observers,
            fn($o) => $o !== $observer
        );
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->grade);
        }
    }

    public function setGrade(float $grade): void
    {
        $this->grade = $grade;
        echo "Grade updated: " . number_format($grade, 2) . PHP_EOL;
        $this->notify(); // automatic notification
    }
}
