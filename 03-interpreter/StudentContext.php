<?php
// CONTEXT: the data the expressions are evaluated against.
class StudentContext
{
    private array $data;
    public function __construct(array $data) { $this->data = $data; }
    public function get(string $key) { return $this->data[$key] ?? null; }
}
