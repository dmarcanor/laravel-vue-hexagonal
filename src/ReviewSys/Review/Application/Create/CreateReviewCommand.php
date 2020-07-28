<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Create;

use Practice\ReviewSys\Shared\Command\Command;

final class CreateReviewCommand implements Command
{
    private $name;
    private $points;

    public function __construct(string $name, int $points)
    {
        $this->name     = $name;
        $this->points   = $points;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function points(): int
    {
        return $this->points;
    }
}
