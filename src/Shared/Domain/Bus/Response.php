<?php

namespace App\Shared\Domain\Bus;

interface Response
{
    public function toPlain(): array;
}