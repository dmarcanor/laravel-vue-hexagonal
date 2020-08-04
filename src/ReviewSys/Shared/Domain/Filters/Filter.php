<?php

declare(strict_types=1);


namespace Practice\ReviewSys\Shared\Domain\Filters;


interface Filter
{
    public  function apply(array $clause);
}
