<?php

namespace App\Shared\Infrastructure\Bus;

use App\Shared\Domain\Bus\Bus;
use App\Shared\Domain\Bus\Command;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

class InMemorySymfonyBus implements Bus
{
    use HandleTrait;

    public function __construct(
        private MessageBusInterface $bus
    ){}

    public function dispatch(Command $command): Envelope
    {
        return $this->bus->dispatch($command);
    }
}