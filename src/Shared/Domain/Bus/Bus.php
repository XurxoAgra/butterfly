<?php

namespace App\Shared\Domain\Bus;

use Symfony\Component\Messenger\Envelope;

interface Bus
{
    public function dispatch(Command $command): Envelope;
}