<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Infrastructure\Bus;

use Practice\ReviewSys\Shared\Container\Container;
use Practice\ReviewSys\Shared\Command\Command;
use Practice\ReviewSys\Shared\Queries\QueryBus;

final class SimpleQueryBus implements QueryBus
{

    private const COMMAND_PREFIX = 'Command';
    private const HANDLER_PREFIX = 'Handler';

    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function execute($query)
    {
        return $this->resolveHandler($query)->__invoke($query);
    }

    private function resolveHandler($query)
    {
        return $this->container->make( $this->getHandlerClass($query) );
    }

    private function getHandlerClass(Command $query): string
    {
        return get_class($query) . 'Query';
    }
}
