<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Read;

use Practice\ReviewSys\Shared\Queries\Query;

class ReadReviewQuery implements Query
{
    private $id;
    private $name;
    private $points;

    public function __construct(int $id, string $name, int $points)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->points   = $points;
    }

    public function id(): int
    {
        return $this->id;
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
