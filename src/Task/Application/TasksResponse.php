<?php

namespace App\Task\Application;

use App\Shared\Domain\Bus\Response;

final class TasksResponse implements Response
{
    /**
     * @param TaskResponse[] $tasks
     */
    public function __construct(private readonly array $tasks)
    {
    }

    public function toPlain(): array
    {
        return [
            'items' => array_map(fn(TaskResponse $task) => $task->toPlain(), $this->tasks)
        ];
    }
}