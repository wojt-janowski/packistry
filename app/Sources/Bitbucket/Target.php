<?php

declare(strict_types=1);

namespace App\Sources\Bitbucket;

class Target extends Input
{
    public function __construct(
        public string $hash,
    ) {}
}
