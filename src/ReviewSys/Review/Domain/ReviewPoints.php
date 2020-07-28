<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Domain;

use Practice\ReviewSys\Shared\Domain\ValueObject\IntValueObject;

final class ReviewPoints extends IntValueObject
{
    protected $exceptions = array(
        'isNumeric'  => 'The points must be numeric',
        'isPositive' => 'The points must be a positive number'
    );

    public function __construct(int $points)
    {
        parent::__construct($points);
    }

}
