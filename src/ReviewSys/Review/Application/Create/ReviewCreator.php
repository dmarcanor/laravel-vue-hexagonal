<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Create;

use Practice\ReviewSys\Review\Domain\Review;
use Practice\ReviewSys\Review\Domain\ReviewName;
use Practice\ReviewSys\Review\Domain\ReviewPoints;
use Practice\ReviewSys\Review\Domain\ReviewRepository;

final class ReviewCreator
{
    private $repository;

    public function __construct(ReviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(ReviewName $name, ReviewPoints $points)
    {
        $review = new Review(null, $name, $points);

        $this->repository->save($review);
    }

}
