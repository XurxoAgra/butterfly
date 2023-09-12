<?php

namespace App\Task\Application;

use App\Shared\Domain\Bus\Command;

final class CreateTaskCommand implements Command
{
    public function __construct(private readonly string $id, private readonly string $name, private readonly string $status)
    {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function status(): string
    {
        return $this->status;
    }
}