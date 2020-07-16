<?php

namespace Practice\ReviewSys\Review\Application\Read;

use Practice\ReviewSys\Shared\Command\CommandHandler;

final class ReadReviewCommandHandler implements CommandHandler
{
    private $reader;

    public function __construct(ReviewReader $reader)
    {
        $this->reader = $reader;
    }

    public function __invoke(ReadReviewCommand $command)
    {
        return $this->reader->__invoke($command->id(), $command->name(), $command->points());
    }
}
