<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Domain;

use Practice\ReviewSys\Shared\Domain\Criteria\Criteria;

interface ReviewRepository
{
    public function save(Review $entity);

    public function search(Criteria $criteria);
}
