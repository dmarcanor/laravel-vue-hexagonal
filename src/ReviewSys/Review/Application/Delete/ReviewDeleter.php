<?php

declare(strict_types=1);

namespace Practice\ReviewSys\Review\Application\Delete;

use Practice\ReviewSys\Review\Domain\ReviewRepository;

final class ReviewDeleter
{
    private $repository;

    public function __construct(ReviewRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $id)
    {
        $this->repository->delete($id);
    }

}
