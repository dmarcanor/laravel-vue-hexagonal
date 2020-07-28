<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Domain;

use Practice\ReviewSys\Shared\Domain\ValueObject\IntValueObject;

final class ReviewId extends IntValueObject
{
    protected $exceptions = array(
        'isNumeric'  => 'The id must be numeric',
        'isPositive' => 'The id must be a positive number'
    );

    public function __construct(int $id)
    {
        parent::__construct($id);
    }

}
