<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Delete;

use Practice\ReviewSys\Review\Domain\ReviewId;
use Practice\ReviewSys\Shared\Command\CommandHandler;

final class DeleteReviewCommandHandler implements CommandHandler
{
    private $deleter;

    public function __construct(ReviewDeleter $deleter)
    {
        $this->deleter = $deleter;
    }

    public function __invoke(DeleteReviewCommand $command)
    {
        $reviewId = new ReviewId($command->id());
        $this->deleter->__invoke($reviewId);
    }
}
