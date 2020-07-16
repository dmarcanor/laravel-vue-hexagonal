<?php

namespace Practice\ReviewSys\Review\Application\Create;

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
        $this->creator->__invoke($command->name(), $command->points());
    }
}
