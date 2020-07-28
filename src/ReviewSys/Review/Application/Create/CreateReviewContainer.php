<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Create;

use Practice\ReviewSys\Shared\Container\Container;
use Illuminate\Container\Container as IoC;

final class CreateReviewContainer implements Container
{
    private $container;

    public function __construct(IoC $container)
    {
        $this->container = $container;
    }

    public function make($class)
    {
        return $this->container->make($class);
    }
}
