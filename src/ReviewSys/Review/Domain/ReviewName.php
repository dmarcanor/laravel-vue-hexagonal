<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Domain;

final class ReviewName
{
    private $name;

    public function __construct(string $name)
    {
        $this->validate($name);
        $this->name = $name;
    }

    public function value(): string
    {
        return $this->name;
    }

    private function validate($name)
    {
        $name = trim($name);

        $this->isEmpty($name);
    }

    private function isEmpty($name)
    {
        if (empty($name)) {
            throw new \Exception("The name can't be empty");
        }
    }

}
