<?php
class StudentRequest
{
    private string $type;
    public function __construct(string $type) { $this->type = $type; }
    public function getType(): string { return $this->type; }
}
