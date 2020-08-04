<?php

declare(strict_types=1);


namespace Practice\ReviewSys\Review\Application\Search;


use Practice\ReviewSys\Review\Domain\ReviewRepository;
use Practice\ReviewSys\Shared\Domain\Criteria\Criteria;

final class ReviewSearcher
{
    private $repository;

    public function __construct(ReviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function search(Criteria $criteria)
    {
        return $this->repository->search($criteria);
    }
}
