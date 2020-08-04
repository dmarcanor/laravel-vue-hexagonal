<?php

declare(strict_types=1);


namespace Practice\ReviewSys\Shared\Domain\Criteria;


final class Filters
{
    private $collection;

    public function __construct(array $collection)
    {
        $collection       = array_filter($collection);
        $this->collection = $collection;
    }

    public function collection(): array
    {
        return $this->collection;
    }

}
