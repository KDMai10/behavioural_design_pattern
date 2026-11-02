<?php
require_once 'Handler.php';

class FinanceHandler extends Handler
{
    protected function canProcess(StudentRequest $request): bool
    {
        return $request->getType() === "Certificate of Enrollment";
    }

    protected function name(): string { return "Finance"; }
}
