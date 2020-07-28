<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Shared\Command;

interface CommandBus
{
    public function execute($command);
}
