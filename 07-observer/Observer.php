<?php
// OBSERVER INTERFACE: anyone who wants to be notified implements update().
interface Observer
{
    public function update(float $grade): void;
}
