<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Update;

use Practice\ReviewSys\Review\Domain\Review;
use Practice\ReviewSys\Review\Domain\ReviewRepository;

final class ReviewUpdater
{
    private $repository;

    public function __construct(ReviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(?int $id, ?string $name, ?int $points)
    {
        $review = new Review($id, $name, $points);

        if (!empty($review->id()))
            return $this->repository->update($review);
    }

}
