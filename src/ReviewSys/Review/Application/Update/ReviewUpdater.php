<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Update;

use Practice\ReviewSys\Review\Domain\Review;
use Practice\ReviewSys\Review\Domain\ReviewId;
use Practice\ReviewSys\Review\Domain\ReviewName;
use Practice\ReviewSys\Review\Domain\ReviewPoints;
use Practice\ReviewSys\Review\Domain\ReviewRepository;

final class ReviewUpdater
{
    private $repository;

    public function __construct(ReviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(?ReviewId $id, ?ReviewName $name, ?ReviewPoints $points)
    {
        $review = new Review($id, $name, $points);

        return $this->repository->update($review);
    }

}
