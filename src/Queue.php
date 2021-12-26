<?php

namespace DS;

class Queue
{
    private int $rear = -1;
    private int $front = 0;
    private int $count = 0;
    private int $max;
    private array $queue = [];

    public function __construct($max)
    {
        $this->max = $max;
    }

    public function empty(): bool
    {
        return $this->count === 0;
    }

    public function full(): bool
    {
        return $this->count === $this->max;
    }

    public function enqueue($data): void
    {
        if ($this->full()) {
            return;
        }

        $this->rear = ($this->rear + 1) % $this->max;

        $this->queue[$this->rear] = $data;

        $this->count++;
    }

    public function dequeue(): void
    {
        if ($this->empty()) {
            return;
        }

        $this->queue[$this->front]= null;

        $this->front = ($this->front + 1) % $this->max;

        $this->count--;
    }

    public function length(): int
    {
        return $this->count;
    }

    public function print(): void
    {
        foreach ($this->queue as $index => $value) {
            echo "{$index} => {$value} \n";
        }
    }

    public function __destruct()
    {
        $this->queue = [];
    }
}