<?php

namespace App\Task\Domain;

class TaskStatus
{
    public function __construct(protected string $value) {}

    public function value(): string
    {
        return $this->value;
    }
}