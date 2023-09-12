<?php

namespace App\Task\Domain;

class Task
{
    public function __construct(
        private readonly TaskId     $id,
        private readonly TaskName   $name,
        private readonly TaskStatus $status,
    ) {}

    public static function create(TaskId $id, TaskName $name, TaskStatus $status): self
    {
        return new self($id, $name, $status);
    }

    public function id(): TaskId
    {
        return $this->id;
    }

    public function name(): TaskName
    {
        return $this->name;
    }

    public function status(): TaskStatus
    {
        return $this->status;
    }

    public function toArray(): array
    {
        return [
            'id'     => $this->id->value(),
            'name'   => $this->name->value(),
            'status' => $this->status->value(),
        ];
    }

    public static function fromArray(Array $parameters): self
    {
        return new self(
            new TaskId($parameters['id']),
            new TaskName($parameters['name']),
            new TaskStatus($parameters['status']),
        );
    }
}