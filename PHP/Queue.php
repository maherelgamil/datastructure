<?php

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

        for ($i = 0; $i < $max; $i++) {
            $this->queue[$i] = null;
        }
    }

    public function empty(): bool
    {
        return empty($this->queue);
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

        unset($this->queue[$this->front]);

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