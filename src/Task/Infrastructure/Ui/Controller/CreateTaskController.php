<?php

namespace App\Task\Infrastructure\Ui\Controller;

use App\Shared\Domain\Bus\Bus;
use App\Task\Application\CreateTaskCommand;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class CreateTaskController
{
    public function __construct(private readonly Bus $bus)
    {}

    public function __invoke(Request $request): JsonResponse
    {
        $response = $this->bus->dispatch(new CreateTaskCommand(
            $request->get('id'),
            $request->get('name'),
            $request->get('status'),
        ));

        return new JsonResponse($response);
    }
}