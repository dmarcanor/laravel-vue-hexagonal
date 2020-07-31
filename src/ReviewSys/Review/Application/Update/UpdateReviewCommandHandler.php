<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Update;

use Practice\ReviewSys\Review\Domain\ReviewId;
use Practice\ReviewSys\Review\Domain\ReviewName;
use Practice\ReviewSys\Review\Domain\ReviewPoints;
use Practice\ReviewSys\Shared\Command\CommandHandler;

final class UpdateReviewCommandHandler implements CommandHandler
{
    private $updater;

    public function __construct(ReviewUpdater $updater)
    {
        $this->updater = $updater;
    }

    public function __invoke(UpdateReviewCommand $command)
    {
        $reviewId       = new ReviewId($command->id());
        $reviewName     = new ReviewName($command->name());
        $reviewPoints   = new ReviewPoints($command->points());
        return $this->updater->__invoke($reviewId, $reviewName, $reviewPoints);
    }
}
