<?php

namespace App\Task\Application;

use App\Shared\Domain\Bus\Command;
use App\Shared\Domain\Bus\CommandHandler;
use App\Task\Domain\Task;
use App\Task\Domain\TaskId;
use App\Task\Domain\TaskName;
use App\Task\Domain\TaskStatus;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class CreateTaskCommandHandler implements CommandHandler
{
//    public function __construct(private TaskRepository $repository)
//    {
//    }

    public function __invoke(CreateTaskCommand|Command $command): TaskResponse
    {
        [$id, $name, $status] = [$command->id(), $command->name(), $command->status()];

        $task = Task::create(new TaskId($id), new TaskName($name), new TaskStatus($status));

//        $this->repository->create($task);

        return TaskResponse::fromTask($task);
    }
}