<?php

namespace App\Task\Application;

use App\Shared\Domain\Bus\Response;
use App\Task\Domain\Task;

final class TaskResponse implements Response
{
    private function __construct(
        private readonly string $id, private readonly string $name, private readonly string $status
    ) {}

    public static function fromTask(Task $task): self
    {
        return new self($task->id()->value(), $task->name()->value(), $task->status()->value());
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

    public function toPlain(): array
    {
        return [
            'id' => $this->id(),
            'name' => $this->name(),
            'done' => $this->status()
        ];
    }
}