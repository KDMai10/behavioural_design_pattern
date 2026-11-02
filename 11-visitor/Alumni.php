<?php
require_once 'Element.php';

class Alumni implements Element
{
    public function __construct(private string $name, private int $extra) {}

    public function getName(): string { return $this->name; }
    public function getExtra(): int { return $this->extra; } // year level / years of service / graduation year

    public function accept(Visitor $visitor): void
    {
        $visitor->visitAlumni($this);
    }
}
