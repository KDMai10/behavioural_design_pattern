<?php
require_once 'StudentRequest.php';

// Base handler: handle it if I can, otherwise pass it to the next handler.
abstract class Handler
{
    private ?Handler $next = null;

    public function setNext(Handler $next): Handler
    {
        $this->next = $next;
        return $next; // allows chaining setNext()->setNext()
    }

    public function handle(StudentRequest $request): void
    {
        if ($this->canProcess($request)) {
            echo $this->name() . ": Processing " . $request->getType() . "..." . PHP_EOL;
        } else {
            echo $this->name() . ": Cannot process request." . PHP_EOL;
            if ($this->next !== null) {
                $this->next->handle($request);
            } else {
                echo "No office can process this request." . PHP_EOL;
            }
        }
    }

    abstract protected function canProcess(StudentRequest $request): bool;
    abstract protected function name(): string;
}
