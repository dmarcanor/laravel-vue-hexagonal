<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Shared\Container;

interface Container
{
    public function make($class);
}
