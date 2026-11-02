<?php
require_once 'Handler.php';

class RegistrarHandler extends Handler
{
    protected function canProcess(StudentRequest $request): bool
    {
        return $request->getType() === "Transcript of Records";
    }

    protected function name(): string { return "Registrar"; }
}
