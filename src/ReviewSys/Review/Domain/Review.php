<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Domain;

final class Review
{
    private $id;
    private $name;
    private $points;

    public function __construct(?ReviewId $id, ReviewName $name, ReviewPoints $points)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->points   = $points;
    }

    private function upperCaseName(): string
    {
        return ucwords($this->name->value());
    }

    public function id(): ?ReviewId
    {
        return $this->id;
    }

    public function name(): ReviewName
    {
        return $this->name;
    }

    public function points(): ReviewPoints
    {
        return $this->points;
    }

    public function toArray(): array
    {
        return $data = [
            'name'   => $this->upperCaseName(),
            'points' => $this->points()->value()
        ];
    }

}
