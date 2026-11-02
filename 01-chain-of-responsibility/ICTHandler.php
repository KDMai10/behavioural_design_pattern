<?php
require_once 'Handler.php';

class ICTHandler extends Handler
{
    protected function canProcess(StudentRequest $request): bool
    {
        return $request->getType() === "Student ID Concern";
    }

    protected function name(): string { return "ICT"; }
}
