<?php

namespace Practice\ReviewSys\Shared\Command;

interface CommandBus
{
    public function execute($command);
}
