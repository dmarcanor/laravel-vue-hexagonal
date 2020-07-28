<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Infrastructure\Bus;

use Practice\ReviewSys\Shared\Command\CommandBus;
use Practice\ReviewSys\Shared\Container\Container;
use Practice\ReviewSys\Shared\Command\Command;

final class SimpleCommandBus implements CommandBus
{

    private const COMMAND_PREFIX = 'Command';
    private const HANDLER_PREFIX = 'Handler';

    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function execute($command)
    {
        return $this->resolveHandler($command)->__invoke($command);
    }

    private function resolveHandler($command)
    {
        return $this->container->make( $this->getHandlerClass($command) );
    }

    private function getHandlerClass(Command $command): string
    {
        return get_class($command) . 'Handler';
    }
}
