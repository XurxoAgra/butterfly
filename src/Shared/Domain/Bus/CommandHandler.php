<?php

namespace App\Shared\Domain\Bus;

interface CommandHandler
{
    public function __invoke(Command $command): Response;
}