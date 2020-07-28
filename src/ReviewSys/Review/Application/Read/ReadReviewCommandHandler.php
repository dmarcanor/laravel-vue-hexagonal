<?php

declare(strict_types=1);

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
        $reviewId       = $command->id();
        $reviewName     = $command->name();
        $reviewPoints   = $command->points();

        return $this->reader->__invoke($command->id(), $command->name(), $command->points());
    }
}
