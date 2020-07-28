<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Read;

use Practice\ReviewSys\Review\Domain\ReviewRepository;

final class ReviewReader
{
    private $repository;

    public function __construct(ReviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(?int $id, ?string $name, ?int $points)
    {
        if (!empty($id) || !empty($name) || !empty($points)) {
            //TODO: Criteria Class.
        }

        return $this->repository->all();
    }

}
