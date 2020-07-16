<?php

namespace Practice\ReviewSys\Review\Domain;

final class Review
{
    private $id;
    private $name;
    private $points;

    public function __construct(?int $id, string $name, int $points)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->points   = $points;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function name(): string
    {
        return ucwords($this->name);
    }

    public function points(): int
    {
        return $this->points;
    }

    public function toArray(): array
    {
        return $data = [
            'name'   => $this->name(),
            'points' => $this->points()
        ];
    }

}
