<?php

namespace DS;

class Stack
{
    private int $top = -1;
    private array $stack = [];

    public function empty(): bool
    {
        return $this->length() === 0;
    }

    public function push($data): void
    {
        $this->top++;

        $this->stack[$this->top] = $data;
    }

    public function pop(): void
    {
        if ($this->empty()) {
            return;
        }

        unset($this->stack[$this->top]);

        $this->top--;
    }

    public function length(): int
    {
        return count($this->stack);
    }

    public function print(): void
    {
        foreach ($this->stack as $index => $value) {
            echo "{$index} => {$value} \n";
        }
    }

    public function __destruct()
    {
        $this->stack = [];
    }
}