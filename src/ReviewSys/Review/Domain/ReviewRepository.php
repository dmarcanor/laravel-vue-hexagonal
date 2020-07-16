<?php

namespace Practice\ReviewSys\Review\Domain;

interface ReviewRepository
{
    public function save(Review $entity);
}
