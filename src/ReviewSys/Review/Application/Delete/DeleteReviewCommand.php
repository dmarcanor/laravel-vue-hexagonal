<?php

namespace Practice\ReviewSys\Review\Application\Delete;

use Practice\ReviewSys\Shared\Command\Command;

final class DeleteReviewCommand implements Command
{
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function id(): int
    {
        return $this->id;
    }

}
