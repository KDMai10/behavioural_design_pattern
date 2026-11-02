<?php
interface State
{
    public function enroll(Student $student): void;
    public function getName(): string;
}
