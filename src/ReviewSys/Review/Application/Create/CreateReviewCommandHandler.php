<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Create;

use Practice\ReviewSys\Review\Domain\ReviewName;
use Practice\ReviewSys\Review\Domain\ReviewPoints;
use Practice\ReviewSys\Shared\Command\CommandHandler;

final class CreateReviewCommandHandler implements CommandHandler
{
    private $creator;

    public function __construct(ReviewCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(CreateReviewCommand $command)
    {
        $reviewName   = new ReviewName($command->name());
        $reviewPoints = new ReviewPoints($command->points());

        $this->creator->__invoke($reviewName, $reviewPoints);
    }
}
