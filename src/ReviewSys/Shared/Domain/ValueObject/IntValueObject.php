<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Shared\Domain\ValueObject;

abstract class IntValueObject
{
    private $value;

    public function __construct($value)
    {
        $this->validate($value);
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

    private function validate($value)
    {
        $this->isNumeric($value);
        $this->isPositive($value);
    }

    private function isNumeric($value)
    {
        if (!is_numeric($value)) {
            throw new \Exception($this->exceptions['isNumeric']);
        }
    }

    private function isPositive($value)
    {
        if ($value <= 0) {
            throw new \Exception($this->exceptions['isPositive']);
        }
    }
}
