<?php
require_once 'Handler.php';

class StudentAffairsHandler extends Handler
{
    protected function canProcess(StudentRequest $request): bool
    {
        return $request->getType() === "Good Moral Certificate";
    }

    protected function name(): string { return "Student Affairs"; }
}
