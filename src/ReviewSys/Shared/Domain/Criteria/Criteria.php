<?php

declare(strict_types=1);


namespace Practice\ReviewSys\Shared\Domain\Criteria;


final class Criteria
{
    private $filters;

    public function __construct(Filters $filters)
    {
        $this->filters = $filters;
    }

    public function filters(): Filters
    {
        return $this->filters;
    }
}
