<?php

namespace App\Task\Domain;

class TaskId
{
    public function __construct(protected int $value) {}

    public function value(): int
    {
        return $this->value;
    }
}