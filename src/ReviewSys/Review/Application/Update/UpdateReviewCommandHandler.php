<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Update;

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
        return $this->updater->__invoke($command->id(), $command->name(), $command->points());
    }
}
