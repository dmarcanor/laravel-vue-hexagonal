<?php

namespace Practice\ReviewSys\Review\Application\Update;

use Practice\ReviewSys\Shared\Command\Command;

final class UpdateReviewCommand implements Command
{
    private $id;
    private $name;
    private $points;

    public function __construct(?int $id, ?string $name, ?int $points)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->points   = $points;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function points(): ?int
    {
        return $this->points;
    }
}
