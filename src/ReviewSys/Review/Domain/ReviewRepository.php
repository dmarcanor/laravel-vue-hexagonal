<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Domain;

interface ReviewRepository
{
    public function save(Review $entity);
}
